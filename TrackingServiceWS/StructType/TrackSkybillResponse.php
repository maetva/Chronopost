<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill|null
     */
    protected ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null;
    /**
     * Constructor method for trackSkybillResponse
     * @uses TrackSkybillResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\TrackSkybillResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
