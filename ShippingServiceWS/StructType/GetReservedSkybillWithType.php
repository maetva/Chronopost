<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithType StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithType
 * @subpackage Structs
 */
class GetReservedSkybillWithType extends AbstractStructBase
{
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reservationNumber = null;
    /**
     * Constructor method for getReservedSkybillWithType
     * @uses GetReservedSkybillWithType::setReservationNumber()
     * @param string $reservationNumber
     */
    public function __construct(?string $reservationNumber = null)
    {
        $this
            ->setReservationNumber($reservationNumber);
    }
    /**
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType
     */
    public function setReservationNumber(?string $reservationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
        
        return $this;
    }
}
