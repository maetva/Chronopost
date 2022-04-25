<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV2Response
 * @subpackage Structs
 */
class ShippingV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingV2Response
     * @uses ShippingV2Response::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2Response
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
