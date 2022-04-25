<?php

declare(strict_types=1);

namespace Maetva\Chronopost\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse
 * @subpackage Structs
 */
class SearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD|null
     */
    protected ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD $return = null;
    /**
     * Constructor method for searchPODResponse
     * @uses SearchPODResponse::setReturn()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD $return
     */
    public function __construct(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD|null
     */
    public function getReturn(): ?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD $return
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODResponse
     */
    public function setReturn(?\Maetva\Chronopost\TrackingServiceWS\StructType\ResultSearchPOD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
