<?php
/**
 * Created for FoxyIDX.
 * User: Brian P Johnson
 * Date: 6/3/12
 * Time: 10:24 PM
 */
class Field extends DataMapper
{
    public $SystemName;
    public $LongName;
    public $dbName;
    public $Searchable;
    public $has_one = array('lookup');
    function __construct()
    {
        parent::DataMapper();
    }
}
