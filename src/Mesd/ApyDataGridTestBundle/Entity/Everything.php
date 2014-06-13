<?php

namespace Mesd\ApyDataGridTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Everything
 */
class Everything
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $sampleBoolean;

    /**
     * @var integer
     */
    private $sampleInteger;

    /**
     * @var integer
     */
    private $sampleSmallInt;

    /**
     * @var integer
     */
    private $sampleBigInt;

    /**
     * @var string
     */
    private $sampleString;

    /**
     * @var string
     */
    private $sampleText;

    /**
     * @var \DateTime
     */
    private $sampleDatetime;

    /**
     * @var \DateTime
     */
    private $sampleDate;

    /**
     * @var \DateTime
     */
    private $sampleTime;

    /**
     * @var string
     */
    private $sampleDecimal;

    /**
     * @var float
     */
    private $sampleFloat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sampleBoolean
     *
     * @param boolean $sampleBoolean
     * @return Everything
     */
    public function setSampleBoolean($sampleBoolean)
    {
        $this->sampleBoolean = $sampleBoolean;

        return $this;
    }

    /**
     * Get sampleBoolean
     *
     * @return boolean 
     */
    public function getSampleBoolean()
    {
        return $this->sampleBoolean;
    }

    /**
     * Set sampleInteger
     *
     * @param integer $sampleInteger
     * @return Everything
     */
    public function setSampleInteger($sampleInteger)
    {
        $this->sampleInteger = $sampleInteger;

        return $this;
    }

    /**
     * Get sampleInteger
     *
     * @return integer 
     */
    public function getSampleInteger()
    {
        return $this->sampleInteger;
    }

    /**
     * Set sampleSmallInt
     *
     * @param integer $sampleSmallInt
     * @return Everything
     */
    public function setSampleSmallInt($sampleSmallInt)
    {
        $this->sampleSmallInt = $sampleSmallInt;

        return $this;
    }

    /**
     * Get sampleSmallInt
     *
     * @return integer 
     */
    public function getSampleSmallInt()
    {
        return $this->sampleSmallInt;
    }

    /**
     * Set sampleBigInt
     *
     * @param integer $sampleBigInt
     * @return Everything
     */
    public function setSampleBigInt($sampleBigInt)
    {
        $this->sampleBigInt = $sampleBigInt;

        return $this;
    }

    /**
     * Get sampleBigInt
     *
     * @return integer 
     */
    public function getSampleBigInt()
    {
        return $this->sampleBigInt;
    }

    /**
     * Set sampleString
     *
     * @param string $sampleString
     * @return Everything
     */
    public function setSampleString($sampleString)
    {
        $this->sampleString = $sampleString;

        return $this;
    }

    /**
     * Get sampleString
     *
     * @return string 
     */
    public function getSampleString()
    {
        return $this->sampleString;
    }

    /**
     * Set sampleText
     *
     * @param string $sampleText
     * @return Everything
     */
    public function setSampleText($sampleText)
    {
        $this->sampleText = $sampleText;

        return $this;
    }

    /**
     * Get sampleText
     *
     * @return string 
     */
    public function getSampleText()
    {
        return $this->sampleText;
    }

    /**
     * Set sampleDatetime
     *
     * @param \DateTime $sampleDatetime
     * @return Everything
     */
    public function setSampleDatetime($sampleDatetime)
    {
        $this->sampleDatetime = $sampleDatetime;

        return $this;
    }

    /**
     * Get sampleDatetime
     *
     * @return \DateTime 
     */
    public function getSampleDatetime()
    {
        return $this->sampleDatetime;
    }

    /**
     * Set sampleDate
     *
     * @param \DateTime $sampleDate
     * @return Everything
     */
    public function setSampleDate($sampleDate)
    {
        $this->sampleDate = $sampleDate;

        return $this;
    }

    /**
     * Get sampleDate
     *
     * @return \DateTime 
     */
    public function getSampleDate()
    {
        return $this->sampleDate;
    }

    /**
     * Set sampleTime
     *
     * @param \DateTime $sampleTime
     * @return Everything
     */
    public function setSampleTime($sampleTime)
    {
        $this->sampleTime = $sampleTime;

        return $this;
    }

    /**
     * Get sampleTime
     *
     * @return \DateTime 
     */
    public function getSampleTime()
    {
        return $this->sampleTime;
    }

    /**
     * Set sampleDecimal
     *
     * @param string $sampleDecimal
     * @return Everything
     */
    public function setSampleDecimal($sampleDecimal)
    {
        $this->sampleDecimal = $sampleDecimal;

        return $this;
    }

    /**
     * Get sampleDecimal
     *
     * @return string 
     */
    public function getSampleDecimal()
    {
        return $this->sampleDecimal;
    }

    /**
     * Set sampleFloat
     *
     * @param float $sampleFloat
     * @return Everything
     */
    public function setSampleFloat($sampleFloat)
    {
        $this->sampleFloat = $sampleFloat;

        return $this;
    }

    /**
     * Get sampleFloat
     *
     * @return float 
     */
    public function getSampleFloat()
    {
        return $this->sampleFloat;
    }
}
