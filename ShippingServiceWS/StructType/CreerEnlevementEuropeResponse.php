<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @subpackage Structs
 */
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses CreerEnlevementEuropeResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
