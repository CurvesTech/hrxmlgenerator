<?php

/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 3:13 PM
 */
use xmlobjects\PositionRecordInfo;
class XMLGenerator
{
    /**
     * The document object.
     * @var DOMDocument
     */
    private $document;
    private $root;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new DOMDocument('1.0', 'UTF-8');
        $this->root = $this->document->createElement('PositionOpening');
    }

    /**
     * Creates the Position Record Info from the given object.
     * @param $pri xmlobjects\PositionRecordInfo
     */
    public function createPositionRecordInfo($pri)
    {
        $PositionRecordInfo = $this->document->createElement('PositionRecordInfo');
        //Creating the Id node.
        $Id = $this->document->createElement('Id',$pri->getId());
        //Id Attribute IdOwner.
        $IdOwner = $this->document->createAttribute('idOwner');
        $IdOwner->value = $pri->getIdOwner();
        $Id->appendChild($IdOwner);
        //creating the Status node, can have 3 values
        // 1. Active, 2. Inactive, 3. Pending
        $Status = $this->document->createElement('Status', $pri->getStatus());
        //Status Attribute validFrom & validTo
        $validFrom = $this->document->createAttribute('validFrom');
        $validFrom->value = $pri->getValidFrom();
        $validTo = $this->document->createAttribute('validTo');
        $validTo->value = $pri->getValidTo();
        $Status->appendChild($validFrom);
        $Status->appendChild($validTo);
        //Appending to Position Record Info.
        $PositionRecordInfo->appendChild($Id);
        $PositionRecordInfo->appendChild($Status);
        //Appending Position Record Info to Root(PositionOpening).
        $this->root->appendChild($PositionRecordInfo);
        //PositionRecordInfo Done.
    }

    /**
     * Creates the PositionSupplier Info from the given object
     * @param $ps xmlobjects\PositionSupplier
     */
    public function createPositionSupplier($ps) {
        //Create the PositionSupplier element.
        $PositionSupplier = $this->document->createElement('PositionSupplier');
        //Create the Supplier Id.
        $SupplierId = $this->document->createElement('SupplierId');
        //add the idOwner attribute.
        $idOwner = $this->document->createAttribute('idOwner');
        $idOwner->value = $ps->getIdOwner();
        //Add the idOwner attribute.
        $SupplierId->appendChild($idOwner);
        //create the IdValue Element.
        $IdValue = $this->document->createElement('IdValue');
        $IdValue->nodeValue = $ps->getSupplierId();
        //Add to SupplierId element.
        $SupplierId->appendChild($IdValue);
        //SupplierId created.

        //Create the EntityName element.
        $EntityName = $this->document->createElement('EntityName',$ps->getEntityName());
        //EntityName created.

        //Create the ContactMethod Element.
        $ContactMethod = $this->document->createElement('ContactMethod');
        //Create the InternetEmailAddress Element.
        $InternetEmailAddress = $this->document->createElement('InternetEmailAddress',$ps->getEmailAddress());
        //Add to ContactMethod Element.
        $ContactMethod->appendChild($InternetEmailAddress);
        //ContactMethod Created.

        //Adding to the base element.
        $PositionSupplier->appendChild($SupplierId);
        $PositionSupplier->appendChild($EntityName);
        $PositionSupplier->appendChild($ContactMethod);

        $this->root->appendChild($PositionSupplier);
    }

    /**
     * Create the PositionProfile element.
     * @param $date_info xmlobjects\PositionDateInfo
     * @param $org xmlobjects\Organization
     * @param $position_detail xmlobjects\PositionDetail
     */
    public function createPositionProfile($date_info, $org, $position_detail) {
        $PositionProfile = $this->document->createElement('PositionProfile');
        $this->createPositionDateInfo($date_info, $PositionProfile);
        $this->createOrganization($org, $PositionProfile);
        $this->createPositionDetail($position_detail, $PositionProfile);
        //add to root.
        $this->root->appendChild($PositionProfile);
    }

    /**
     * Creates the PositionDateInfo element for PositionProfile.
     * @param $date_info xmlobjects\PositionDateInfo
     * @param $parent DOMElement
     */
    private function createPositionDateInfo($date_info, $parent) {
        $PositionDateInfo = $this->document->createElement('PositionDateInfo');
        //create the date elements.
        $StartDate = $this->document->createElement('StartDate',$date_info->getStartDate());
        $ExpectedEndDate = $this->document->createElement('ExpectedEndDate', $date_info->getExpectedEndDate());
        //add to the PositionDateInfo
        $PositionDateInfo->appendChild($StartDate);
        $PositionDateInfo->appendChild($ExpectedEndDate);
        //add to parent.
        $parent->appendChild($PositionDateInfo);
        //PositionDateInfo created.
    }

    /**
     * Creates the Organization element for PositionProfile.
     * @param $org xmlobjects\Organization
     * @param $parent DOMElement
     */
    private function createOrganization($org, $parent) {
        $Organization = $this->document->createElement('Organization');
        //OrganizationName element.
        $OrganizationName = $this->document->createElement('OrganizationName', $org->getOrganizationName());

        //ContactInfo element.
        //it goes ContactInfo > ContactMethod > PostalAddress
        $ContactInfo = $this->document->createElement('ContactInfo');
        //ContactMethod element.
        $ContactMethod = $this->document->createElement('ContactMethod');
        //PostalAddress element.
        $PostalAddress = $this->document->createElement('PostalAddress');
        //CountryCode element.
        $CountryCode = $this->document->createElement('CountryCode', $org->getCountryCode());
        //PostalCode element.
        $PostalCode = $this->document->createElement('PostalCode', $org->getPostalCode());
        //Municipality element.
        $Municipality = $this->document->createElement('Municipality', $org->getMunicipality());
        //DeliveryAddress element.
        //it goes DeliveryAddress > StreetName > BuildingNumber
        $DeliveryAddress = $this->document->createElement('DeliveryAddress');
        //StreetName element.
        $StreetName = $this->document->createElement('StreetName', $org->getStreetName());
        //BuildingNumber element.
        $BuildingNumber = $this->document->createElement('BuildingNumber', $org->getBuildingNumber());
        //add to DeliveryAddress.
        $DeliveryAddress->appendChild($StreetName);
        $DeliveryAddress->appendChild($BuildingNumber);
        //add to PostalAddress.
        $PostalAddress->appendChild($CountryCode);
        $PostalAddress->appendChild($PostalCode);
        $PostalAddress->appendChild($Municipality);
        $PostalAddress->appendChild($DeliveryAddress);
        //add to ContactMethod
        $ContactMethod->appendChild($PostalAddress);
        //add to ContactInfo
        $ContactInfo->appendChild($ContactMethod);

        //add to the Organization.
        $Organization->appendChild($OrganizationName);
        $Organization->appendChild($ContactInfo);

        //add to parent.
        $parent->appendChild($Organization);
    }

    /**
     * Creates the PositionDetail element for PositionProfile.
     * @param $position_detail xmlobjects\PositionDetail
     * @param $parent DOMElement
     */
    private function createPositionDetail($position_detail, $parent) {
        $PositionDetail = $this->document->createElement('PositionDetail');
        //Create thePositionTitle element.
        $PositionTitle = $this->document->createElement('PositionTitle',$position_detail->getPositionTitle());

        //Create the FormattedPositionDescriptions.
        $FormattedPositionDescriptions = [];
        foreach($position_detail->getFormattedJobDescriptions() as $index=>$formatted_position_description) {
            $FormattedPositionDescriptions[$index] = $this->document->createElement('FormattedPositionDescription');
            //Create the Name Element
            $Name = $this->document->createElement('Name', $formatted_position_description->getName());
            $Value = $this->document->createElement('Value', $formatted_position_description->getValue());
            //add to the element.
            $FormattedPositionDescriptions[$index]->appendChild($Name);
            $FormattedPositionDescriptions[$index]->appendChild($Value);
        }

        //Add the Position Title
        $PositionDetail->appendChild($PositionTitle);
        //Add the FormattedJobDescriptions
        foreach($FormattedPositionDescriptions as $description) {
            $PositionDetail->appendChild($description);
        }

        //add  to parent.
        $parent->appendChild($PositionDetail);
    }
    /**
     * Save the xml file.
     * @param string $file_name
     */
    public function save($file_name = 'xmltemp.xml')
    {
        $this->document->appendChild($this->root);
        $this->document->save($file_name);
    }

}