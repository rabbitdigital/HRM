<?php

/**
 * BaseCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cou_code
 * @property string $name
 * @property string $cou_name
 * @property string $iso3
 * @property integer $numcode
 * @property Doctrine_Collection $Location
 * @property OperationalCountry $OperationalCountry
 * 
 * @method string              getCouCode()            Returns the current record's "cou_code" value
 * @method string              getName()               Returns the current record's "name" value
 * @method string              getCouName()            Returns the current record's "cou_name" value
 * @method string              getIso3()               Returns the current record's "iso3" value
 * @method integer             getNumcode()            Returns the current record's "numcode" value
 * @method Doctrine_Collection getLocation()           Returns the current record's "Location" collection
 * @method OperationalCountry  getOperationalCountry() Returns the current record's "OperationalCountry" value
 * @method Country             setCouCode()            Sets the current record's "cou_code" value
 * @method Country             setName()               Sets the current record's "name" value
 * @method Country             setCouName()            Sets the current record's "cou_name" value
 * @method Country             setIso3()               Sets the current record's "iso3" value
 * @method Country             setNumcode()            Sets the current record's "numcode" value
 * @method Country             setLocation()           Sets the current record's "Location" collection
 * @method Country             setOperationalCountry() Sets the current record's "OperationalCountry" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_city');
        $this->hasColumn('id', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 11,
             ));
        $this->hasColumn('name', 'string', 80, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 80,
             ));
        $this->hasColumn('cou_name', 'string', 80, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 80,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        /*$this->hasMany('Location', array(
             'local' => 'cou_code',
             'foreign' => 'country_code'));

        $this->hasOne('OperationalCountry', array(
             'local' => 'cou_code',
             'foreign' => 'country_code'));*/
    }
}