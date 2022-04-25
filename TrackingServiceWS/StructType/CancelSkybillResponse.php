<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse
 * @subpackage Structs
 */
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill $return = null;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses CancelSkybillResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill $return
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\CancelSkybillResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
