<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevement StructType
 * @subpackage Structs
 */
class ResultAnnulerEnlevement extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The statut
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut $statut = null;
    /**
     * Constructor method for resultAnnulerEnlevement
     * @uses ResultAnnulerEnlevement::setCodeErreur()
     * @uses ResultAnnulerEnlevement::setErrorMessage()
     * @uses ResultAnnulerEnlevement::setStatut()
     * @param int $codeErreur
     * @param string $errorMessage
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut $statut
     */
    public function __construct(?int $codeErreur = null, ?string $errorMessage = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut $statut = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setErrorMessage($errorMessage)
            ->setStatut($statut);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get statut value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut|null
     */
    public function getStatut(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut
    {
        return $this->statut;
    }
    /**
     * Set statut value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut $statut
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement
     */
    public function setStatut(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Statut $statut = null): self
    {
        $this->statut = $statut;
        
        return $this;
    }
}
