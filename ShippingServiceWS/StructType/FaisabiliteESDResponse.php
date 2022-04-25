<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
