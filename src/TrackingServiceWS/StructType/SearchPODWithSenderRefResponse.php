<?php

declare(strict_types=1);

namespace Maetva\Chronopost\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse
 * @subpackage Structs
 */
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef|null
     */
    protected ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses SearchPODWithSenderRefResponse::setReturn()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef|null
     */
    public function getReturn(): ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
