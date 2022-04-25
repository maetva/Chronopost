<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2Response
 * @subpackage Structs
 */
class TrackSkybillV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2|null
     */
    protected ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2 $return = null;
    /**
     * Constructor method for trackSkybillV2Response
     * @uses TrackSkybillV2Response::setReturn()
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2 $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2 $return
     * @return \Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\TrackSkybillV2Response
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\TrackingServiceWS\StructType\ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
