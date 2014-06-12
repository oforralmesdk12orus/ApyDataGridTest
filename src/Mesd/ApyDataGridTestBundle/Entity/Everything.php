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
     * @var array
     */
    private $sampleArray;

    /**
     * @var array
     */
    private $sampleSimpleArray;

    /**
     * @var array
     */
    private $sampleJsonArray;

    /**
     * @var \stdClass
     */
    private $sampleObject;

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
    private $sampleStrin;

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
    private $sampleDatetimeTz;

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
     * @var string
     */
    private $sampleBlob;

    /**
     * @var guid
     */
    private $sampleGuid;


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
     * Set sampleArray
     *
     * @param array $sampleArray
     * @return Everything
     */
    public function setSampleArray($sampleArray)
    {
        $this->sampleArray = $sampleArray;

        return $this;
    }

    /**
     * Get sampleArray
     *
     * @return array 
     */
    public function getSampleArray()
    {
        return $this->sampleArray;
    }

    /**
     * Set sampleSimpleArray
     *
     * @param array $sampleSimpleArray
     * @return Everything
     */
    public function setSampleSimpleArray($sampleSimpleArray)
    {
        $this->sampleSimpleArray = $sampleSimpleArray;

        return $this;
    }

    /**
     * Get sampleSimpleArray
     *
     * @return array 
     */
    public function getSampleSimpleArray()
    {
        return $this->sampleSimpleArray;
    }

    /**
     * Set sampleJsonArray
     *
     * @param array $sampleJsonArray
     * @return Everything
     */
    public function setSampleJsonArray($sampleJsonArray)
    {
        $this->sampleJsonArray = $sampleJsonArray;

        return $this;
    }

    /**
     * Get sampleJsonArray
     *
     * @return array 
     */
    public function getSampleJsonArray()
    {
        return $this->sampleJsonArray;
    }

    /**
     * Set sampleObject
     *
     * @param \stdClass $sampleObject
     * @return Everything
     */
    public function setSampleObject($sampleObject)
    {
        $this->sampleObject = $sampleObject;

        return $this;
    }

    /**
     * Get sampleObject
     *
     * @return \stdClass 
     */
    public function getSampleObject()
    {
        return $this->sampleObject;
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
     * Set sampleStrin
     *
     * @param string $sampleStrin
     * @return Everything
     */
    public function setSampleStrin($sampleStrin)
    {
        $this->sampleStrin = $sampleStrin;

        return $this;
    }

    /**
     * Get sampleStrin
     *
     * @return string 
     */
    public function getSampleStrin()
    {
        return $this->sampleStrin;
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
     * Set sampleDatetimeTz
     *
     * @param \DateTime $sampleDatetimeTz
     * @return Everything
     */
    public function setSampleDatetimeTz($sampleDatetimeTz)
    {
        $this->sampleDatetimeTz = $sampleDatetimeTz;

        return $this;
    }

    /**
     * Get sampleDatetimeTz
     *
     * @return \DateTime 
     */
    public function getSampleDatetimeTz()
    {
        return $this->sampleDatetimeTz;
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

    /**
     * Set sampleBlob
     *
     * @param string $sampleBlob
     * @return Everything
     */
    public function setSampleBlob($sampleBlob)
    {
        $this->sampleBlob = $sampleBlob;

        return $this;
    }

    /**
     * Get sampleBlob
     *
     * @return string 
     */
    public function getSampleBlob()
    {
        return $this->sampleBlob;
    }

    /**
     * Set sampleGuid
     *
     * @param guid $sampleGuid
     * @return Everything
     */
    public function setSampleGuid($sampleGuid)
    {
        $this->sampleGuid = $sampleGuid;

        return $this;
    }

    /**
     * Get sampleGuid
     *
     * @return guid 
     */
    public function getSampleGuid()
    {
        return $this->sampleGuid;
    }
    /**
     * @var string
     */
    private $sampleString;


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
}
