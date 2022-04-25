<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch|null
     */
    protected ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null;
    /**
     * Constructor method for trackSearchResponse
     * @uses TrackSearchResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\TrackSearchResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSearch $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
