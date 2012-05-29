<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 5/27/12
 * Time: 7:35 PM
 * To change this template use File | Settings | File Templates.
 */
class User extends DataMapper
{
    public $email;
    $has_many = array('password');
    function __construct()
    {
        parent::DataMapper();
    }

}
