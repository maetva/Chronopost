<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESD StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESD
 * @subpackage Structs
 */
class FaisabiliteESD extends AbstractStructBase
{
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null;
    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $retrievalDateTime = null;
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $closingDateTime = null;
    /**
     * Constructor method for faisabiliteESD
     * @uses FaisabiliteESD::setShipperValue()
     * @uses FaisabiliteESD::setRetrievalDateTime()
     * @uses FaisabiliteESD::setClosingDateTime()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param string $retrievalDateTime
     * @param string $closingDateTime
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?string $retrievalDateTime = null, ?string $closingDateTime = null)
    {
        $this
            ->setShipperValue($shipperValue)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setClosingDateTime($closingDateTime);
    }
    /**
     * Get shipperValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD
     */
    public function setShipperValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get retrievalDateTime value
     * @return string|null
     */
    public function getRetrievalDateTime(): ?string
    {
        return $this->retrievalDateTime;
    }
    /**
     * Set retrievalDateTime value
     * @param string $retrievalDateTime
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD
     */
    public function setRetrievalDateTime(?string $retrievalDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;
        
        return $this;
    }
    /**
     * Get closingDateTime value
     * @return string|null
     */
    public function getClosingDateTime(): ?string
    {
        return $this->closingDateTime;
    }
    /**
     * Set closingDateTime value
     * @param string $closingDateTime
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD
     */
    public function setClosingDateTime(?string $closingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;
        
        return $this;
    }
}
