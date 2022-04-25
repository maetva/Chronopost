<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientPCResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientPCResponse
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClientPCResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientPCResponse
     * @uses ShippingWithReservationAndESDWithRefClientPCResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPCResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
