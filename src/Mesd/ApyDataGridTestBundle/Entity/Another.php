<?php

namespace Mesd\ApyDataGridTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Another
 */
class Another
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $exampleBoolean;

    /**
     * @var integer
     */
    private $exampleInteger;

    /**
     * @var integer
     */
    private $exampleSmallInt;

    /**
     * @var integer
     */
    private $exampleBigInt;

    /**
     * @var string
     */
    private $exampleString;

    /**
     * @var string
     */
    private $exampleText;

    /**
     * @var \DateTime
     */
    private $exampleDatetime;

    /**
     * @var \DateTime
     */
    private $exampleDate;

    /**
     * @var \DateTime
     */
    private $exampleTime;

    /**
     * @var string
     */
    private $exampleDecimal;

    /**
     * @var float
     */
    private $exampleFloat;


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
     * Set exampleBoolean
     *
     * @param boolean $exampleBoolean
     * @return Another
     */
    public function setExampleBoolean($exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;

        return $this;
    }

    /**
     * Get exampleBoolean
     *
     * @return boolean 
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * Set exampleInteger
     *
     * @param integer $exampleInteger
     * @return Another
     */
    public function setExampleInteger($exampleInteger)
    {
        $this->exampleInteger = $exampleInteger;

        return $this;
    }

    /**
     * Get exampleInteger
     *
     * @return integer 
     */
    public function getExampleInteger()
    {
        return $this->exampleInteger;
    }

    /**
     * Set exampleSmallInt
     *
     * @param integer $exampleSmallInt
     * @return Another
     */
    public function setExampleSmallInt($exampleSmallInt)
    {
        $this->exampleSmallInt = $exampleSmallInt;

        return $this;
    }

    /**
     * Get exampleSmallInt
     *
     * @return integer 
     */
    public function getExampleSmallInt()
    {
        return $this->exampleSmallInt;
    }

    /**
     * Set exampleBigInt
     *
     * @param integer $exampleBigInt
     * @return Another
     */
    public function setExampleBigInt($exampleBigInt)
    {
        $this->exampleBigInt = $exampleBigInt;

        return $this;
    }

    /**
     * Get exampleBigInt
     *
     * @return integer 
     */
    public function getExampleBigInt()
    {
        return $this->exampleBigInt;
    }

    /**
     * Set exampleString
     *
     * @param string $exampleString
     * @return Another
     */
    public function setExampleString($exampleString)
    {
        $this->exampleString = $exampleString;

        return $this;
    }

    /**
     * Get exampleString
     *
     * @return string 
     */
    public function getExampleString()
    {
        return $this->exampleString;
    }

    /**
     * Set exampleText
     *
     * @param string $exampleText
     * @return Another
     */
    public function setExampleText($exampleText)
    {
        $this->exampleText = $exampleText;

        return $this;
    }

    /**
     * Get exampleText
     *
     * @return string 
     */
    public function getExampleText()
    {
        return $this->exampleText;
    }

    /**
     * Set exampleDatetime
     *
     * @param \DateTime $exampleDatetime
     * @return Another
     */
    public function setExampleDatetime($exampleDatetime)
    {
        $this->exampleDatetime = $exampleDatetime;

        return $this;
    }

    /**
     * Get exampleDatetime
     *
     * @return \DateTime 
     */
    public function getExampleDatetime()
    {
        return $this->exampleDatetime;
    }

    /**
     * Set exampleDate
     *
     * @param \DateTime $exampleDate
     * @return Another
     */
    public function setExampleDate($exampleDate)
    {
        $this->exampleDate = $exampleDate;

        return $this;
    }

    /**
     * Get exampleDate
     *
     * @return \DateTime 
     */
    public function getExampleDate()
    {
        return $this->exampleDate;
    }

    /**
     * Set exampleTime
     *
     * @param \DateTime $exampleTime
     * @return Another
     */
    public function setExampleTime($exampleTime)
    {
        $this->exampleTime = $exampleTime;

        return $this;
    }

    /**
     * Get exampleTime
     *
     * @return \DateTime 
     */
    public function getExampleTime()
    {
        return $this->exampleTime;
    }

    /**
     * Set exampleDecimal
     *
     * @param string $exampleDecimal
     * @return Another
     */
    public function setExampleDecimal($exampleDecimal)
    {
        $this->exampleDecimal = $exampleDecimal;

        return $this;
    }

    /**
     * Get exampleDecimal
     *
     * @return string 
     */
    public function getExampleDecimal()
    {
        return $this->exampleDecimal;
    }

    /**
     * Set exampleFloat
     *
     * @param float $exampleFloat
     * @return Another
     */
    public function setExampleFloat($exampleFloat)
    {
        $this->exampleFloat = $exampleFloat;

        return $this;
    }

    /**
     * Get exampleFloat
     *
     * @return float 
     */
    public function getExampleFloat()
    {
        return $this->exampleFloat;
    }
}
