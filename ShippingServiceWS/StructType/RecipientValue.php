<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientValue StructType
 * @subpackage Structs
 */
class RecipientValue extends AbstractStructBase
{
    /**
     * The recipientAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress1 = null;
    /**
     * The recipientAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress2 = null;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCity = null;
    /**
     * The recipientContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientContactName = null;
    /**
     * The recipientCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountry = null;
    /**
     * The recipientCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountryName = null;
    /**
     * The recipientEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientEmail = null;
    /**
     * The recipientMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientMobilePhone = null;
    /**
     * The recipientName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientName = null;
    /**
     * The recipientName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientName2 = null;
    /**
     * The recipientPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientPhone = null;
    /**
     * The recipientPreAlert
     * @var int|null
     */
    protected ?int $recipientPreAlert = null;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientZipCode = null;
    /**
     * Constructor method for recipientValue
     * @uses RecipientValue::setRecipientAdress1()
     * @uses RecipientValue::setRecipientAdress2()
     * @uses RecipientValue::setRecipientCity()
     * @uses RecipientValue::setRecipientContactName()
     * @uses RecipientValue::setRecipientCountry()
     * @uses RecipientValue::setRecipientCountryName()
     * @uses RecipientValue::setRecipientEmail()
     * @uses RecipientValue::setRecipientMobilePhone()
     * @uses RecipientValue::setRecipientName()
     * @uses RecipientValue::setRecipientName2()
     * @uses RecipientValue::setRecipientPhone()
     * @uses RecipientValue::setRecipientPreAlert()
     * @uses RecipientValue::setRecipientZipCode()
     * @param string $recipientAdress1
     * @param string $recipientAdress2
     * @param string $recipientCity
     * @param string $recipientContactName
     * @param string $recipientCountry
     * @param string $recipientCountryName
     * @param string $recipientEmail
     * @param string $recipientMobilePhone
     * @param string $recipientName
     * @param string $recipientName2
     * @param string $recipientPhone
     * @param int $recipientPreAlert
     * @param string $recipientZipCode
     */
    public function __construct(?string $recipientAdress1 = null, ?string $recipientAdress2 = null, ?string $recipientCity = null, ?string $recipientContactName = null, ?string $recipientCountry = null, ?string $recipientCountryName = null, ?string $recipientEmail = null, ?string $recipientMobilePhone = null, ?string $recipientName = null, ?string $recipientName2 = null, ?string $recipientPhone = null, ?int $recipientPreAlert = null, ?string $recipientZipCode = null)
    {
        $this
            ->setRecipientAdress1($recipientAdress1)
            ->setRecipientAdress2($recipientAdress2)
            ->setRecipientCity($recipientCity)
            ->setRecipientContactName($recipientContactName)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientCountryName($recipientCountryName)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientMobilePhone($recipientMobilePhone)
            ->setRecipientName($recipientName)
            ->setRecipientName2($recipientName2)
            ->setRecipientPhone($recipientPhone)
            ->setRecipientPreAlert($recipientPreAlert)
            ->setRecipientZipCode($recipientZipCode);
    }
    /**
     * Get recipientAdress1 value
     * @return string|null
     */
    public function getRecipientAdress1(): ?string
    {
        return $this->recipientAdress1;
    }
    /**
     * Set recipientAdress1 value
     * @param string $recipientAdress1
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientAdress1(?string $recipientAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress1) && !is_string($recipientAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress1, true), gettype($recipientAdress1)), __LINE__);
        }
        $this->recipientAdress1 = $recipientAdress1;
        
        return $this;
    }
    /**
     * Get recipientAdress2 value
     * @return string|null
     */
    public function getRecipientAdress2(): ?string
    {
        return $this->recipientAdress2;
    }
    /**
     * Set recipientAdress2 value
     * @param string $recipientAdress2
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientAdress2(?string $recipientAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress2) && !is_string($recipientAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress2, true), gettype($recipientAdress2)), __LINE__);
        }
        $this->recipientAdress2 = $recipientAdress2;
        
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientCity(?string $recipientCity = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        
        return $this;
    }
    /**
     * Get recipientContactName value
     * @return string|null
     */
    public function getRecipientContactName(): ?string
    {
        return $this->recipientContactName;
    }
    /**
     * Set recipientContactName value
     * @param string $recipientContactName
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientContactName(?string $recipientContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientContactName) && !is_string($recipientContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientContactName, true), gettype($recipientContactName)), __LINE__);
        }
        $this->recipientContactName = $recipientContactName;
        
        return $this;
    }
    /**
     * Get recipientCountry value
     * @return string|null
     */
    public function getRecipientCountry(): ?string
    {
        return $this->recipientCountry;
    }
    /**
     * Set recipientCountry value
     * @param string $recipientCountry
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientCountry(?string $recipientCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountry, true), gettype($recipientCountry)), __LINE__);
        }
        $this->recipientCountry = $recipientCountry;
        
        return $this;
    }
    /**
     * Get recipientCountryName value
     * @return string|null
     */
    public function getRecipientCountryName(): ?string
    {
        return $this->recipientCountryName;
    }
    /**
     * Set recipientCountryName value
     * @param string $recipientCountryName
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientCountryName(?string $recipientCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountryName) && !is_string($recipientCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountryName, true), gettype($recipientCountryName)), __LINE__);
        }
        $this->recipientCountryName = $recipientCountryName;
        
        return $this;
    }
    /**
     * Get recipientEmail value
     * @return string|null
     */
    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }
    /**
     * Set recipientEmail value
     * @param string $recipientEmail
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientEmail(?string $recipientEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientEmail) && !is_string($recipientEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmail, true), gettype($recipientEmail)), __LINE__);
        }
        $this->recipientEmail = $recipientEmail;
        
        return $this;
    }
    /**
     * Get recipientMobilePhone value
     * @return string|null
     */
    public function getRecipientMobilePhone(): ?string
    {
        return $this->recipientMobilePhone;
    }
    /**
     * Set recipientMobilePhone value
     * @param string $recipientMobilePhone
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientMobilePhone(?string $recipientMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientMobilePhone) && !is_string($recipientMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientMobilePhone, true), gettype($recipientMobilePhone)), __LINE__);
        }
        $this->recipientMobilePhone = $recipientMobilePhone;
        
        return $this;
    }
    /**
     * Get recipientName value
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }
    /**
     * Set recipientName value
     * @param string $recipientName
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientName(?string $recipientName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;
        
        return $this;
    }
    /**
     * Get recipientName2 value
     * @return string|null
     */
    public function getRecipientName2(): ?string
    {
        return $this->recipientName2;
    }
    /**
     * Set recipientName2 value
     * @param string $recipientName2
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientName2(?string $recipientName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName2) && !is_string($recipientName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName2, true), gettype($recipientName2)), __LINE__);
        }
        $this->recipientName2 = $recipientName2;
        
        return $this;
    }
    /**
     * Get recipientPhone value
     * @return string|null
     */
    public function getRecipientPhone(): ?string
    {
        return $this->recipientPhone;
    }
    /**
     * Set recipientPhone value
     * @param string $recipientPhone
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientPhone(?string $recipientPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientPhone) && !is_string($recipientPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientPhone, true), gettype($recipientPhone)), __LINE__);
        }
        $this->recipientPhone = $recipientPhone;
        
        return $this;
    }
    /**
     * Get recipientPreAlert value
     * @return int|null
     */
    public function getRecipientPreAlert(): ?int
    {
        return $this->recipientPreAlert;
    }
    /**
     * Set recipientPreAlert value
     * @param int $recipientPreAlert
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientPreAlert(?int $recipientPreAlert = null): self
    {
        // validation for constraint: int
        if (!is_null($recipientPreAlert) && !(is_int($recipientPreAlert) || ctype_digit($recipientPreAlert))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recipientPreAlert, true), gettype($recipientPreAlert)), __LINE__);
        }
        $this->recipientPreAlert = $recipientPreAlert;
        
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
     */
    public function setRecipientZipCode(?string $recipientZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
        
        return $this;
    }
}
