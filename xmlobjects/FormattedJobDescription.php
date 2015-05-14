<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 6:27 PM
 */

namespace xmlobjects;


class FormattedJobDescription {
    /**
     * @var string
     */
    private $Name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
    }
    /**
     * @var string
     */
    private $Value;

}