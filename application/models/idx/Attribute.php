<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 6/3/12
 * Time: 10:18 PM
 * To change this template use File | Settings | File Templates.
 */
class Attribute extends DataMapper
{
    public $value;
    public $has_one = array('field','lookup');
    function __construct()
    {
        parent::DataMapper();
    }
}
