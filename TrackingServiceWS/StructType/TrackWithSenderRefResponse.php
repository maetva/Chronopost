<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef|null
     */
    protected ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses TrackWithSenderRefResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\TrackWithSenderRefResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
