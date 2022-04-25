<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

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
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses SearchPODWithSenderRefResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
