<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 4:06 PM
 */

namespace xmlobjects;


class PositionRecordInfo {
    /**
     * Unique Identifier of the object.
     * @var int
     */
    private $Id;
    /**
     * Owner of the id
     * @var string
     */
    private $idOwner = 'BrightOwl';
    /**
     * Status of the Position Opening.
     * values can be.
     * Active, Inactive, Pending
     * @var string
     */
    private $Status;
    /**
     * YYYY-MM-DD
     * @var string
     */
    private $validFrom;
    /**
     * YYYY-MM-DD
     * @var string
     */
    private $validTo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return string
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * @param string $IdOwner
     */
    public function setIdOwner($IdOwner)
    {
        $this->idOwner = $IdOwner;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param string $validFrom
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @return string
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param string $validTo
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
    }



}