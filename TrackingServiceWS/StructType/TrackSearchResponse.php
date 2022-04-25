<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse
 * @subpackage Structs
 */
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null;
    /**
     * Constructor method for trackSearchResponse
     * @uses TrackSearchResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\TrackSearchResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
