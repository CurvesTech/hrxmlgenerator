<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/14/2015
 * Time: 6:46 PM
 */

namespace xmlobjects;


class Competency {
    /**
     * Name of the competency.
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}