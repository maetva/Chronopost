<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @subpackage Structs
 */
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
