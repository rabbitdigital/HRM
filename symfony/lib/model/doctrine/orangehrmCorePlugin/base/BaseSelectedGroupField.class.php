<?php

/**
 * BaseSelectedGroupField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $groupFieldId
 * @property integer $summaryDisplayFieldId
 * @property integer $reportId
 * @property GroupField $GroupField
 * @property Report $Report
 * @property SummaryDisplayField $SummaryDisplayField
 * 
 * @method integer             getGroupFieldId()          Returns the current record's "groupFieldId" value
 * @method integer             getSummaryDisplayFieldId() Returns the current record's "summaryDisplayFieldId" value
 * @method integer             getReportId()              Returns the current record's "reportId" value
 * @method GroupField          getGroupField()            Returns the current record's "GroupField" value
 * @method Report              getReport()                Returns the current record's "Report" value
 * @method SummaryDisplayField getSummaryDisplayField()   Returns the current record's "SummaryDisplayField" value
 * @method SelectedGroupField  setGroupFieldId()          Sets the current record's "groupFieldId" value
 * @method SelectedGroupField  setSummaryDisplayFieldId() Sets the current record's "summaryDisplayFieldId" value
 * @method SelectedGroupField  setReportId()              Sets the current record's "reportId" value
 * @method SelectedGroupField  setGroupField()            Sets the current record's "GroupField" value
 * @method SelectedGroupField  setReport()                Sets the current record's "Report" value
 * @method SelectedGroupField  setSummaryDisplayField()   Sets the current record's "SummaryDisplayField" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSelectedGroupField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_selected_group_field');
        $this->hasColumn('group_field_id as groupFieldId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('summary_display_field_id as summaryDisplayFieldId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('report_id as reportId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('GroupField', array(
             'local' => 'group_field_id',
             'foreign' => 'groupFieldId',
             'onDelete' => 'cascade'));

        $this->hasOne('Report', array(
             'local' => 'report_id',
             'foreign' => 'reportId',
             'onDelete' => 'cascade'));

        $this->hasOne('SummaryDisplayField', array(
             'local' => 'summary_display_field_id',
             'foreign' => 'summaryDisplayFieldId',
             'onDelete' => 'cascade'));
    }
}