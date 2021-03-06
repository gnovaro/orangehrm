<?php

/**
 * BaseJobCandidate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                        $id                                                    Type: integer(13), primary key
 * @property string                                     $firstName                                             Type: string(30)
 * @property string                                     $middleName                                            Type: string(30)
 * @property string                                     $lastName                                              Type: string(30)
 * @property string                                     $email                                                 Type: string(100)
 * @property string                                     $contactNumber                                         Type: string(30)
 * @property int                                        $status                                                Type: integer(4)
 * @property string                                     $comment                                               Type: string(2147483647)
 * @property int                                        $modeOfApplication                                     Type: integer(4)
 * @property string                                     $dateOfApplication                                     Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @property string                                     $cvTextVersion                                         Type: string(2147483647)
 * @property string                                     $keywords                                              Type: string(255)
 * @property int                                        $addedPerson                                           Type: integer(13)
 * @property bool                                       $consentToKeepData                                     Type: boolean
 * @property Doctrine_Collection|JobCandidateVacancy[]  $JobCandidateVacancy                                   
 * @property JobCandidateAttachment                     $JobCandidateAttachment                                
 * @property Doctrine_Collection|CandidateHistory[]     $CandidateHistory                                      
 * @property Employee                                   $Employee                                              
 * @property Doctrine_Collection|JobInterview[]         $JobInterview                                          
 *  
 * @method int                                          getId()                                                Type: integer(13), primary key
 * @method string                                       getFirstname()                                         Type: string(30)
 * @method string                                       getMiddlename()                                        Type: string(30)
 * @method string                                       getLastname()                                          Type: string(30)
 * @method string                                       getEmail()                                             Type: string(100)
 * @method string                                       getContactnumber()                                     Type: string(30)
 * @method int                                          getStatus()                                            Type: integer(4)
 * @method string                                       getComment()                                           Type: string(2147483647)
 * @method int                                          getModeofapplication()                                 Type: integer(4)
 * @method string                                       getDateofapplication()                                 Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method string                                       getCvtextversion()                                     Type: string(2147483647)
 * @method string                                       getKeywords()                                          Type: string(255)
 * @method int                                          getAddedperson()                                       Type: integer(13)
 * @method bool                                         getConsenttokeepdata()                                 Type: boolean
 * @method Doctrine_Collection|JobCandidateVacancy[]    getJobCandidateVacancy()                               
 * @method JobCandidateAttachment                       getJobCandidateAttachment()                            
 * @method Doctrine_Collection|CandidateHistory[]       getCandidateHistory()                                  
 * @method Employee                                     getEmployee()                                          
 * @method Doctrine_Collection|JobInterview[]           getJobInterview()                                      
 *  
 * @method JobCandidate                                 setId(int $val)                                        Type: integer(13), primary key
 * @method JobCandidate                                 setFirstname(string $val)                              Type: string(30)
 * @method JobCandidate                                 setMiddlename(string $val)                             Type: string(30)
 * @method JobCandidate                                 setLastname(string $val)                               Type: string(30)
 * @method JobCandidate                                 setEmail(string $val)                                  Type: string(100)
 * @method JobCandidate                                 setContactnumber(string $val)                          Type: string(30)
 * @method JobCandidate                                 setStatus(int $val)                                    Type: integer(4)
 * @method JobCandidate                                 setComment(string $val)                                Type: string(2147483647)
 * @method JobCandidate                                 setModeofapplication(int $val)                         Type: integer(4)
 * @method JobCandidate                                 setDateofapplication(string $val)                      Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method JobCandidate                                 setCvtextversion(string $val)                          Type: string(2147483647)
 * @method JobCandidate                                 setKeywords(string $val)                               Type: string(255)
 * @method JobCandidate                                 setAddedperson(int $val)                               Type: integer(13)
 * @method JobCandidate                                 setConsenttokeepdata(bool $val)                        Type: boolean
 * @method JobCandidate                                 setJobCandidateVacancy(Doctrine_Collection $val)       
 * @method JobCandidate                                 setJobCandidateAttachment(JobCandidateAttachment $val) 
 * @method JobCandidate                                 setCandidateHistory(Doctrine_Collection $val)          
 * @method JobCandidate                                 setEmployee(Employee $val)                             
 * @method JobCandidate                                 setJobInterview(Doctrine_Collection $val)              
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobCandidate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_candidate');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 13,
             ));
        $this->hasColumn('first_name as firstName', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('middle_name as middleName', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('last_name as lastName', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('email', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('contact_number as contactNumber', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('comment', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('mode_of_application as modeOfApplication', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('date_of_application as dateOfApplication', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('cv_text_version as cvTextVersion', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('added_person as addedPerson', 'integer', 13, array(
             'type' => 'integer',
             'length' => 13,
             ));
        $this->hasColumn('consent_to_keep_data as consentToKeepData', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobCandidateVacancy', array(
             'local' => 'id',
             'foreign' => 'candidateId'));

        $this->hasOne('JobCandidateAttachment', array(
             'local' => 'id',
             'foreign' => 'candidateId'));

        $this->hasMany('CandidateHistory', array(
             'local' => 'id',
             'foreign' => 'candidateId'));

        $this->hasOne('Employee', array(
             'local' => 'addedPerson',
             'foreign' => 'empNumber'));

        $this->hasMany('JobInterview', array(
             'local' => 'id',
             'foreign' => 'candidateId'));
    }
}