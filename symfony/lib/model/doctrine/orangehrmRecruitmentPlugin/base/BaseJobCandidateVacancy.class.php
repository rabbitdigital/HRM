<?php

/**
 * BaseJobCandidateVacancy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $candidateId
 * @property integer $vacancyId
 * @property string $status
 * @property date $appliedDate
 * @property JobVacancy $JobVacancy
 * @property JobCandidate $JobCandidate
 * @property Doctrine_Collection $JobInterview
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method integer             getCandidateId()  Returns the current record's "candidateId" value
 * @method integer             getVacancyId()    Returns the current record's "vacancyId" value
 * @method string              getStatus()       Returns the current record's "status" value
 * @method date                getAppliedDate()  Returns the current record's "appliedDate" value
 * @method JobVacancy          getJobVacancy()   Returns the current record's "JobVacancy" value
 * @method JobCandidate        getJobCandidate() Returns the current record's "JobCandidate" value
 * @method Doctrine_Collection getJobInterview() Returns the current record's "JobInterview" collection
 * @method JobCandidateVacancy setId()           Sets the current record's "id" value
 * @method JobCandidateVacancy setCandidateId()  Sets the current record's "candidateId" value
 * @method JobCandidateVacancy setVacancyId()    Sets the current record's "vacancyId" value
 * @method JobCandidateVacancy setStatus()       Sets the current record's "status" value
 * @method JobCandidateVacancy setAppliedDate()  Sets the current record's "appliedDate" value
 * @method JobCandidateVacancy setJobVacancy()   Sets the current record's "JobVacancy" value
 * @method JobCandidateVacancy setJobCandidate() Sets the current record's "JobCandidate" value
 * @method JobCandidateVacancy setJobInterview() Sets the current record's "JobInterview" collection
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobCandidateVacancy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_candidate_vacancy');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'unique' => true,
             'length' => 13,
             ));
        $this->hasColumn('candidate_id as candidateId', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('vacancy_id as vacancyId', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('status', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('applied_date as appliedDate', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobVacancy', array(
             'local' => 'vacancyId',
             'foreign' => 'id'));

        $this->hasOne('JobCandidate', array(
             'local' => 'candidateId',
             'foreign' => 'id'));

        $this->hasMany('JobInterview', array(
             'local' => 'id',
             'foreign' => 'candidateVacancyId'));
    }
}