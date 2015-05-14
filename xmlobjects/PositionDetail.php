<?php
/**
 * Created by PhpStorm.
 * User: Mubashir
 * Date: 5/13/2015
 * Time: 6:23 PM
 */

namespace xmlobjects;


class PositionDetail {
    /**
     * @var string
     */
    private $PositionTitle;
    /**
     * @var array
     */
    private $FormattedJobDescriptions;

    /**
     * @return string
     */
    public function getPositionTitle()
    {
        return $this->PositionTitle;
    }

    /**
     * @param string $PositionTitle
     */
    public function setPositionTitle($PositionTitle)
    {
        $this->PositionTitle = $PositionTitle;
    }

    /**
     * @return array
     */
    public function getFormattedJobDescriptions()
    {
        return $this->FormattedJobDescriptions;
    }

    /**
     * @param array $FormattedJobDescriptions
     */
    public function setFormattedJobDescriptions($FormattedJobDescriptions)
    {
        $this->FormattedJobDescriptions = $FormattedJobDescriptions;
    }

}