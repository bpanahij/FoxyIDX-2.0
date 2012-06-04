<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 6/3/12
 * Time: 10:14 PM
 * To change this template use File | Settings | File Templates.
 */
class Lookup extends DataMapper
{
    public $has_many = array('field','lookupvalue');
    function __construct()
    {
        parent::DataMapper();
    }
}