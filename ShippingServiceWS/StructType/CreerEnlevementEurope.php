<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEurope StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEurope
 * @subpackage Structs
 */
class CreerEnlevementEurope extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePassage = null;
    /**
     * The donneurDOrdre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre $donneurDOrdre = null;
    /**
     * The adresseEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3 $adresseEnlevement = null;
    /**
     * The destinatairesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd $destinatairesEsd = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for creerEnlevementEurope
     * @uses CreerEnlevementEurope::setHeaderValue()
     * @uses CreerEnlevementEurope::setPassword()
     * @uses CreerEnlevementEurope::setDatePassage()
     * @uses CreerEnlevementEurope::setDonneurDOrdre()
     * @uses CreerEnlevementEurope::setAdresseEnlevement()
     * @uses CreerEnlevementEurope::setDestinatairesEsd()
     * @uses CreerEnlevementEurope::setLocale()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre $donneurDOrdre
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd $destinatairesEsd
     * @param string $locale
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre $donneurDOrdre = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3 $adresseEnlevement = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd $destinatairesEsd = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setDestinatairesEsd($destinatairesEsd)
            ->setLocale($locale);
    }
    /**
     * Get headerValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setHeaderValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get datePassage value
     * @return string|null
     */
    public function getDatePassage(): ?string
    {
        return $this->datePassage;
    }
    /**
     * Set datePassage value
     * @param string $datePassage
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setDatePassage(?string $datePassage = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;
        
        return $this;
    }
    /**
     * Get donneurDOrdre value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre|null
     */
    public function getDonneurDOrdre(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre
    {
        return $this->donneurDOrdre;
    }
    /**
     * Set donneurDOrdre value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre $donneurDOrdre
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setDonneurDOrdre(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DonneurDOrdre $donneurDOrdre = null): self
    {
        $this->donneurDOrdre = $donneurDOrdre;
        
        return $this;
    }
    /**
     * Get adresseEnlevement value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3|null
     */
    public function getAdresseEnlevement(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3
    {
        return $this->adresseEnlevement;
    }
    /**
     * Set adresseEnlevement value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setAdresseEnlevement(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;
        
        return $this;
    }
    /**
     * Get destinatairesEsd value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd|null
     */
    public function getDestinatairesEsd(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd
    {
        return $this->destinatairesEsd;
    }
    /**
     * Set destinatairesEsd value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd $destinatairesEsd
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setDestinatairesEsd(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinatairesDpd $destinatairesEsd = null): self
    {
        $this->destinatairesEsd = $destinatairesEsd;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}