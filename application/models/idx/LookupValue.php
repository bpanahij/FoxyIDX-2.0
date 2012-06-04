<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 6/3/12
 * Time: 10:17 PM
 * To change this template use File | Settings | File Templates.
 */
class LookupValue extends DataMapper
{
    public $LongValue;
    public $ShortValue;
    public $Value;
    public $has_one = array('lookup');
}