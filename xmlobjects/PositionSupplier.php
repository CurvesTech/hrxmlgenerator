<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 4:35 PM
 */

namespace xmlobjects;


class PositionSupplier {
    /**
     * The supplier i.e. the company's unique identifier.
     * @var int
     */
    private $supplier_id;

    /**
     * The id of the owner of this supplier id.
     * default = 'BrightOwl'
     * @var string
     */
    private $idOwner = 'BrightOwl';

    /**
     * Name of the entity, i.e. the company.
     * @var string
     */
    private $entity_name;


    /**
     * Email address of the company.
     * @var string
     */
    private $email_address;

    /**
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * @param int $supplier_id
     */
    public function setSupplierId($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    /**
     * @return string
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * @param string $idOwner
     */
    public function setIdOwner($idOwner)
    {
        $this->idOwner = $idOwner;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entity_name;
    }

    /**
     * @param string $entity_name
     */
    public function setEntityName($entity_name)
    {
        $this->entity_name = $entity_name;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * @param string $email_address
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
    }


}