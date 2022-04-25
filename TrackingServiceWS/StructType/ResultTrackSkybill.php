<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybill StructType
 * @subpackage Structs
 */
class ResultTrackSkybill extends AbstractStructBase
{
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
     * The listEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents $listEvents = null;
    /**
     * Constructor method for resultTrackSkybill
     * @uses ResultTrackSkybill::setErrorCode()
     * @uses ResultTrackSkybill::setErrorMessage()
     * @uses ResultTrackSkybill::setListEvents()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents $listEvents
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents $listEvents = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEvents($listEvents);
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
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill
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
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill
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
    /**
     * Get listEvents value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents|null
     */
    public function getListEvents(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents
    {
        return $this->listEvents;
    }
    /**
     * Set listEvents value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents $listEvents
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill
     */
    public function setListEvents(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEvents $listEvents = null): self
    {
        $this->listEvents = $listEvents;
        
        return $this;
    }
}
