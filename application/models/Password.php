<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 5/27/12
 * Time: 7:35 PM
 * To change this template use File | Settings | File Templates.
 */
class Password extends DataMapper
{
    public $value;
    public $changed;
    public $salt;
    $has_one = array('user');
    function __construct()
    {
        parent::DataMapper();
    }
}
