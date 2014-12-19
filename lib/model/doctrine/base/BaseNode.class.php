<?php

/**
 * BaseNode
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $gw_id
 * @property string $description
 * @property string $civic_number
 * @property string $street_name
 * @property string $city
 * @property string $province
 * @property string $country
 * @property string $postal_code
 * @property string $public_phone_number
 * @property string $public_email
 * @property string $mass_transit_info
 * @property string $deployment_status
 * @property timestamp $last_heartbeat_at
 * @property string $last_heartbeat_ip
 * @property integer $last_heartbeat_sys_uptime
 * @property integer $last_heartbeat_sys_memfree
 * @property float $last_heartbeat_sys_load
 * @property integer $last_heartbeat_wifidog_uptime
 * @property Doctrine_Collection $Connection
 * 
 * @method string              getName()                          Returns the current record's "name" value
 * @method string              getGwId()                          Returns the current record's "gw_id" value
 * @method string              getDescription()                   Returns the current record's "description" value
 * @method string              getCivicNumber()                   Returns the current record's "civic_number" value
 * @method string              getStreetName()                    Returns the current record's "street_name" value
 * @method string              getCity()                          Returns the current record's "city" value
 * @method string              getProvince()                      Returns the current record's "province" value
 * @method string              getCountry()                       Returns the current record's "country" value
 * @method string              getPostalCode()                    Returns the current record's "postal_code" value
 * @method string              getPublicPhoneNumber()             Returns the current record's "public_phone_number" value
 * @method string              getPublicEmail()                   Returns the current record's "public_email" value
 * @method string              getMassTransitInfo()               Returns the current record's "mass_transit_info" value
 * @method string              getDeploymentStatus()              Returns the current record's "deployment_status" value
 * @method timestamp           getLastHeartbeatAt()               Returns the current record's "last_heartbeat_at" value
 * @method string              getLastHeartbeatIp()               Returns the current record's "last_heartbeat_ip" value
 * @method integer             getLastHeartbeatSysUptime()        Returns the current record's "last_heartbeat_sys_uptime" value
 * @method integer             getLastHeartbeatSysMemfree()       Returns the current record's "last_heartbeat_sys_memfree" value
 * @method float               getLastHeartbeatSysLoad()          Returns the current record's "last_heartbeat_sys_load" value
 * @method integer             getLastHeartbeatWifidogUptime()    Returns the current record's "last_heartbeat_wifidog_uptime" value
 * @method Doctrine_Collection getConnection()                    Returns the current record's "Connection" collection
 * @method Node                setName()                          Sets the current record's "name" value
 * @method Node                setGwId()                          Sets the current record's "gw_id" value
 * @method Node                setDescription()                   Sets the current record's "description" value
 * @method Node                setCivicNumber()                   Sets the current record's "civic_number" value
 * @method Node                setStreetName()                    Sets the current record's "street_name" value
 * @method Node                setCity()                          Sets the current record's "city" value
 * @method Node                setProvince()                      Sets the current record's "province" value
 * @method Node                setCountry()                       Sets the current record's "country" value
 * @method Node                setPostalCode()                    Sets the current record's "postal_code" value
 * @method Node                setPublicPhoneNumber()             Sets the current record's "public_phone_number" value
 * @method Node                setPublicEmail()                   Sets the current record's "public_email" value
 * @method Node                setMassTransitInfo()               Sets the current record's "mass_transit_info" value
 * @method Node                setDeploymentStatus()              Sets the current record's "deployment_status" value
 * @method Node                setLastHeartbeatAt()               Sets the current record's "last_heartbeat_at" value
 * @method Node                setLastHeartbeatIp()               Sets the current record's "last_heartbeat_ip" value
 * @method Node                setLastHeartbeatSysUptime()        Sets the current record's "last_heartbeat_sys_uptime" value
 * @method Node                setLastHeartbeatSysMemfree()       Sets the current record's "last_heartbeat_sys_memfree" value
 * @method Node                setLastHeartbeatSysLoad()          Sets the current record's "last_heartbeat_sys_load" value
 * @method Node                setLastHeartbeatWifidogUptime()    Sets the current record's "last_heartbeat_wifidog_uptime" value
 * @method Node                setConnection()                    Sets the current record's "Connection" collection
 * 
 * @package    authpuppy
 * @subpackage model
 * @author     Frédéric Sheedy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNode extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('nodes');
        $this->hasColumn('name', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('gw_id', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 50,
             ));
        $this->hasColumn('description', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('civic_number', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('street_name', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('city', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('province', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('country', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('postal_code', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
        $this->hasColumn('public_phone_number', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('public_email', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('mass_transit_info', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('deployment_status', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('last_heartbeat_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('last_heartbeat_ip', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_heartbeat_sys_uptime', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('last_heartbeat_sys_memfree', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('last_heartbeat_sys_load', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('last_heartbeat_wifidog_uptime', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             'model' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Connection', array(
             'local' => 'id',
             'foreign' => 'node_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}