<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdWithRefClientValue StructType
 * @subpackage Structs
 */
class EsdWithRefClientValue extends EsdValue
{
    /**
     * The ltAImprimerParChronopost
     * @var bool|null
     */
    protected ?bool $ltAImprimerParChronopost = null;
    /**
     * The nombreDePassageMaximum
     * @var int|null
     */
    protected ?int $nombreDePassageMaximum = null;
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $refEsdClient = null;
    /**
     * Constructor method for esdWithRefClientValue
     * @uses EsdWithRefClientValue::setLtAImprimerParChronopost()
     * @uses EsdWithRefClientValue::setNombreDePassageMaximum()
     * @uses EsdWithRefClientValue::setRefEsdClient()
     * @param bool $ltAImprimerParChronopost
     * @param int $nombreDePassageMaximum
     * @param string $refEsdClient
     */
    public function __construct(?bool $ltAImprimerParChronopost = null, ?int $nombreDePassageMaximum = null, ?string $refEsdClient = null)
    {
        $this
            ->setLtAImprimerParChronopost($ltAImprimerParChronopost)
            ->setNombreDePassageMaximum($nombreDePassageMaximum)
            ->setRefEsdClient($refEsdClient);
    }
    /**
     * Get ltAImprimerParChronopost value
     * @return bool|null
     */
    public function getLtAImprimerParChronopost(): ?bool
    {
        return $this->ltAImprimerParChronopost;
    }
    /**
     * Set ltAImprimerParChronopost value
     * @param bool $ltAImprimerParChronopost
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue
     */
    public function setLtAImprimerParChronopost(?bool $ltAImprimerParChronopost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ltAImprimerParChronopost) && !is_bool($ltAImprimerParChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ltAImprimerParChronopost, true), gettype($ltAImprimerParChronopost)), __LINE__);
        }
        $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;
        
        return $this;
    }
    /**
     * Get nombreDePassageMaximum value
     * @return int|null
     */
    public function getNombreDePassageMaximum(): ?int
    {
        return $this->nombreDePassageMaximum;
    }
    /**
     * Set nombreDePassageMaximum value
     * @param int $nombreDePassageMaximum
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue
     */
    public function setNombreDePassageMaximum(?int $nombreDePassageMaximum = null): self
    {
        // validation for constraint: int
        if (!is_null($nombreDePassageMaximum) && !(is_int($nombreDePassageMaximum) || ctype_digit($nombreDePassageMaximum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreDePassageMaximum, true), gettype($nombreDePassageMaximum)), __LINE__);
        }
        $this->nombreDePassageMaximum = $nombreDePassageMaximum;
        
        return $this;
    }
    /**
     * Get refEsdClient value
     * @return string|null
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }
    /**
     * Set refEsdClient value
     * @param string $refEsdClient
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;
        
        return $this;
    }
}
