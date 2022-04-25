<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse
 * @subpackage Structs
 */
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses TrackWithSenderRefResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\TrackWithSenderRefResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
