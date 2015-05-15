<?php
require 'vendor/autoload.php';

use xmlobjects\PositionDetail;
use xmlobjects\Competency;
use xmlobjects\FormattedJobDescription;
use xmlobjects\PositionDateInfo;
use xmlobjects\PositionRecordInfo;
use xmlobjects\PositionSupplier;
use xmlobjects\Organization;


$generator = new XMLGenerator();
$pri = new \xmlobjects\PositionRecordInfo();
$pri->setId(1);
$pri->setIdOwner('BrightOwl');
$pri->setStatus('Active');
$pri->setValidFrom('2014-04-19');
$pri->setValidTo('2014-05-15');

$ps = new xmlobjects\PositionSupplier();
$ps->setSupplierId(2);
$ps->setIdOwner('BrightOwl');
$ps->setEmailAddress('mubashir.abbas@outlook.com');
$ps->setEntityName('Microsoft');

$date_info = new xmlobjects\PositionDateInfo();
$date_info->setStartDate('2014-04-01');
$date_info->setExpectedEndDate('2015-05-05');

$org = new \xmlobjects\Organization();
$org->setBuildingNumber(150);
$org->setCountryCode('PK');
$org->setMunicipality('Lenovo');
$org->setOrganizationName('Microsoft');
$org->setPostalCode('46000');
$org->setStreetName('Privet Drive');

$position_detail = new \xmlobjects\PositionDetail();
$fjd1 = new \xmlobjects\FormattedJobDescription();
$fjd1->setName('Shopping');
$fjd1->setValue('You will be shopping for us 24 7.');

$fjd2 = new \xmlobjects\FormattedJobDescription();
$fjd2->setName('Running');
$fjd2->setValue('You should run if you can.');
$fjds = [
    $fjd1, $fjd2,
];
$position_detail->setPositionTitle('Manager');
$position_detail->setFormattedJobDescriptions($fjds);
//set up competencies.
$competency1 = new Competency();
$competency1->setName('Agreeable');
$competency2 = new Competency();
$competency2->setName('Neuroticst');
$competencies = [
    $competency1, $competency2,
];
$position_detail->setCompetencies($competencies);
$generator->createPositionRecordInfo($pri);
$generator->createPositionSupplier($ps);
$generator->createPositionProfile($date_info, $org, $position_detail);
$generator->save();



