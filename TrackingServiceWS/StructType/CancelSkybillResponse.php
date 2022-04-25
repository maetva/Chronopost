<?php

declare(strict_types=1);

namespace Maetva\Chronopost\TrackingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill|null
     */
    protected ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill $return = null;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses CancelSkybillResponse::setReturn()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill $return
     */
    public function __construct(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill|null
     */
    public function getReturn(): ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill $return
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybillResponse
     */
    public function setReturn(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
