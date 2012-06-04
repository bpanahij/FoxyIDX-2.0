<?php

class IDX  extends CI_Controller {

    private $user = 'fallback';
    private $password = 'fallback';
    private $idxAgent = "fallback";
    public $actions = array();
    public $classes = array();
    public $fields = array();
    public $lookups = array();
    public $search = array();
    private $DOM;
    private $requestURL = "http://aus.rets.interealty.com";
    private $responseXML;
    private $queryVars = array();

    public function __construct($user = false, $password = false, $idxAgent = false, $requestURL = false) {
        $this->user = ($user ? $user : $this->user);
        $this->password = ($password ? $password : $this->password);
        $this->idxAgent = ($idxAgent ? $idxAgent : $this->idxAgent);
        $this->requestURL = ($requestURL ? $requestURL : $this->requestURL);
        $this->authenticate();
    }

    public function authenticate() {
        $submit_url = $this->requestURL."/Login.asmx/Login";
        $data = $this->getXML($submit_url, "authenticate", "YmdHi");
        $this->actions = array();
        $login = $this->DOM;
        $lines = preg_split('/[\n\r]/', $login->getElementsByTagName('RETS-RESPONSE')->item(0)->nodeValue);
        unset($lines['']);
        foreach($lines as $line) {
            if(preg_match('/=/',$line)) {
                list($key,$value) = preg_split('/=/',$line);
                $this->actions[$key] = $value;
            }
        }
    }

    public function loadFields() {
        $this->getXML("http://aus.rets.interealty.com/GetMetadata.asmx/GetMetadata?Format=STANDARD-XML&Type=METADATA-Table&ID=*", "infoFields");
        $fieldsDOM = $this->DOM;
        $this->fields = array();
        $classFields = $fieldsDOM->getElementsByTagName('METADATA-TABLE');
        foreach($classFields as $classField) {
            $classID = $classField->getAttribute('Class');
            $this->classes[$classID] = $classField->getAttribute('Resource');
            $this->fields[$classID] = array();
            $fieldNodeList = $classField->getElementsByTagName("Field");
            foreach($fieldNodeList as $fieldNode) {
                $sysName = $fieldNode->getElementsByTagName("SystemName")->item(0)->nodeValue;
                $this->fields[$classID][$sysName] = array();
                $childNodes = $fieldNode->childNodes;
                foreach($childNodes as $childNode) {
                    $this->fields[$classID][$sysName][$childNode->nodeName] = $childNode->nodeValue;
                }
                unset($this->fields[$classID][$sysName]['#text']);
            }
        }
    }

    public function loadLookups() {
        $this->getXML("http://aus.rets.interealty.com/GetMetadata.asmx/GetMetadata?Format=STANDARD-XML&Type=METADATA-Lookup&ID=*", "infoLookup");
        $lookupDOM = $this->DOM;
        $this->lookups = array();
        $lookupClassNodeList = $lookupDOM->getElementsByTagName('METADATA-LOOKUP');
        foreach($lookupClassNodeList as $lookupClassNode) {
            $resource = $lookupClassNode->getAttribute('Resource');
            $this->lookups[$resource] = array();
            $lookupTypeNodeList = $lookupClassNode->getElementsByTagName('LookupType');
            foreach($lookupTypeNodeList as $lookupTypeNode) {
                $lookupTypeName = $lookupTypeNode->getElementsByTagName('LookupName')->item(0)->nodeValue;
                $this->lookups[$resource][$lookupTypeName] = array();
                $lookupTypeDate = $lookupTypeNode->getElementsByTagName('LookupTypeDate')->item(0)->nodeValue;
                $lookupNodeList = $lookupTypeNode->getElementsByTagName("Lookup");
                foreach($lookupNodeList as $lookupNode) {
                    $LongValue = $lookupNode->getElementsByTagName('LongValue')->item(0)->nodeValue;
                    $ShortValue = $lookupNode->getElementsByTagName('ShortValue')->item(0)->nodeValue;
                    $Value = $lookupNode->getElementsByTagName('Value')->item(0)->nodeValue;
                    $this->lookups[$resource][$lookupTypeName][$Value] = array('LongValue' => $LongValue, 'ShortValue' => $ShortValue, 'Value' => $Value);
                }
            }
        }
    }

    public function loadSearch($fields = array(), $classID=3, $limit=100000) {
        $this->loadFields();
        $submit_url = $this->requestURL.$this->actions['Search'];
        $submit_url .= "?SearchType=Property&Class=$classID&QueryType=DMQL2&Format=COMPACT";
        $submit_url .= "&Query=";
        $count = 0;
        foreach($fields as $index => $value) {
            if($count > 0) {
                $submit_url .= ",";
            }
            $submit_url .= "($index=".$value.")";
            $count++;
        }
        $submit_url .= "&Limit=$limit";
        $this->getXML($submit_url, 'property', "YmdHis");
        $COLUMNS = "";
        $columnList = $this->DOM->getElementsByTagName('COLUMNS')->item(0);
        if(!is_null($columnList)) {
            $COLUMNS = $columnList->textContent;
        }
        else return false;
        $columnArray = preg_split("/\t/", $COLUMNS);
        $dataArray = array();
        $DATANodeList = $this->DOM->getElementsByTagName('DATA');
        foreach($DATANodeList as $DataNode) {
            $dataRowFormat = array();
            $dataRow = preg_split("/\t/", $DataNode->textContent);
            unset($dataRow['']);
            foreach($dataRow as $colIndex => $dataVal) {
                if(isset($columnArray[$colIndex]) && $classID > 0) {
                    if(isset($this->fields[$classID][$columnArray[$colIndex]])) {
                        $dataRowFormat[$this->fields[$classID][$columnArray[$colIndex]]['SystemName']] = $dataVal;
                    }
                }
            }
            $dataArray[] = $dataRowFormat;
        }
        $this->search = $dataArray;
    }

    function getPhoto( $sysid, $num) {
        $submit_url = $this->requestURL.$this->actions['GetObject'];
        $submit_url .= "?Type=Photo&Resource=Property&ID=$sysid:$num";
        $data = $this->makeRequest($submit_url);
        return $data;
    }

    private function getXML($xmlUrl, $xmlName, $mask = "Ymd") {
        $data = $this->makeRequest($xmlUrl);
        $this->DOM = new DomDocument();
        $result = $this->DOM->loadXML($data);
        return $this->DOM->saveXML();
    }

    private function makeRequest($xmlUrl) {
        $submit_url = $xmlUrl;
        $authBasic = 'Roya:RJohnson1';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: */*'));
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_USERPWD, $authBasic);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'roya/1.0');
        curl_setopt($ch, CURLOPT_URL, $submit_url);
        $data = curl_exec($ch);
        $info = curl_getinfo($ch);
        $request_header_info = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        curl_close($ch);
        return $data;
    }

    public function createSchema() {
        $this->loadFields();
        $this->loadLookups();
        echo "TEST";
        $this->load->model('idx/Field');
        foreach($this->fields[4] as $sys_name => $sys_props)
        {
            $field = new Field();
            $field->SystemName = $sys['SystemName'];
            $field->LongName = $sys['LongName'];
            $field->dbName = $sys['dbName'];
            $field->Searchable = $sys['Searchable'];
            $field->save();
            $lookupName = $sys['LookupName'];
            if(strlen($lookupName) > 0 && isset($this->lookups['Property'][$lookupName])) {
                $lookup = new Lookup();
                $lookup->save($field);
                foreach($this->lookups['Property'][$lookupName] as $name => $vals) {
                    $lVal = new LookupValue();
                    $lVal->LongValue = $$vals['LongValue'];
                    $lVal->ShortValue = $vals['ShortValue'];
                    $lVal->Value = $vals['Value'];
                    $lVal->save($lookup);
                }
            }
        }
    }
}

?>
