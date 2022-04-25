<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The detail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail $detail = null;
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * Constructor method for error
     * @uses Error::setDetail()
     * @uses Error::setErrorCode()
     * @uses Error::setErrorMessage()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail $detail
     * @param int $errorCode
     * @param string $errorMessage
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail $detail = null, ?int $errorCode = null, ?string $errorMessage = null)
    {
        $this
            ->setDetail($detail)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get detail value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail|null
     */
    public function getDetail(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail
    {
        return $this->detail;
    }
    /**
     * Set detail value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail $detail
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error
     */
    public function setDetail(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Detail $detail = null): self
    {
        $this->detail = $detail;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
}
