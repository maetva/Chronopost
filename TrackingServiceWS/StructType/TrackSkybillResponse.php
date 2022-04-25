<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillResponse
 * @subpackage Structs
 */
class TrackSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null;
    /**
     * Constructor method for trackSkybillResponse
     * @uses TrackSkybillResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\TrackSkybillResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
