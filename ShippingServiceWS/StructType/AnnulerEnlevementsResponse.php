<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
