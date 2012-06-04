<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Brian P Johnson
 * Date: 6/3/12
 * Time: 9:35 PM
 */
class Listing extends DataMapper
{
    public $date;
    public $state;
    public $county;
    public $city;
    public $zip;
    public $address;
    public $mls;
    public $lat;
    public $long;
    public $has_many = array('attribute');
    function __construct()
    {
        parent::DataMapper();
    }
}