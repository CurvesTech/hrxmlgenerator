<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 5:09 PM
 */

namespace xmlobjects;


class Organization {
    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organization_name;
    }

    /**
     * @param string $organization_name
     */
    public function setOrganizationName($organization_name)
    {
        $this->organization_name = $organization_name;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return string
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }

    /**
     * @param string $municipality
     */
    public function setMunicipality($municipality)
    {
        $this->municipality = $municipality;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->street_name;
    }

    /**
     * @param string $street_name
     */
    public function setStreetName($street_name)
    {
        $this->street_name = $street_name;
    }

    /**
     * @return int
     */
    public function getBuildingNumber()
    {
        return $this->building_number;
    }

    /**
     * @param int $building_number
     */
    public function setBuildingNumber($building_number)
    {
        $this->building_number = $building_number;
    }
    /**
     * Name of the organization.
     * @var string
     */
    private $organization_name;
    /**
     * PK, UK etc.
     * @var string
     */
    private $country_code;

    /**
     * @var string
     */
    private $postal_code;

    /**
     * e.g. Leuven
     * @var string
     */
    private $municipality;
    /**
     * @var string
     */
    private $street_name;

    /**
     * @var int
     */
    private $building_number;
}