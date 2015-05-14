<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 5:49 PM
 */

namespace xmlobjects;


class PositionDateInfo {

    /**
     * YYYY-MM-DD
     * @var string
     */
    private $StartDate;

    /**
     * YYYY-MM-DD
     * @var string
     */
    private $ExpectedEndDate;

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return string
     */
    public function getExpectedEndDate()
    {
        return $this->ExpectedEndDate;
    }

    /**
     * @param string $ExpectedEndDate
     */
    public function setExpectedEndDate($ExpectedEndDate)
    {
        $this->ExpectedEndDate = $ExpectedEndDate;
    }


}