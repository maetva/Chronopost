<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scheduledValue StructType
 * @subpackage Structs
 */
class ScheduledValue extends AbstractStructBase
{
    /**
     * The appointmentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue $appointmentValue = null;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $expirationDate = null;
    /**
     * The sellByDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sellByDate = null;
    /**
     * Constructor method for scheduledValue
     * @uses ScheduledValue::setAppointmentValue()
     * @uses ScheduledValue::setExpirationDate()
     * @uses ScheduledValue::setSellByDate()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue $appointmentValue
     * @param string $expirationDate
     * @param string $sellByDate
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue $appointmentValue = null, ?string $expirationDate = null, ?string $sellByDate = null)
    {
        $this
            ->setAppointmentValue($appointmentValue)
            ->setExpirationDate($expirationDate)
            ->setSellByDate($sellByDate);
    }
    /**
     * Get appointmentValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue|null
     */
    public function getAppointmentValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue
    {
        return $this->appointmentValue;
    }
    /**
     * Set appointmentValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue $appointmentValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
     */
    public function setAppointmentValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AppointmentValue $appointmentValue = null): self
    {
        $this->appointmentValue = $appointmentValue;
        
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get sellByDate value
     * @return string|null
     */
    public function getSellByDate(): ?string
    {
        return $this->sellByDate;
    }
    /**
     * Set sellByDate value
     * @param string $sellByDate
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
     */
    public function setSellByDate(?string $sellByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($sellByDate) && !is_string($sellByDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellByDate, true), gettype($sellByDate)), __LINE__);
        }
        $this->sellByDate = $sellByDate;
        
        return $this;
    }
}
