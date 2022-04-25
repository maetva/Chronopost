<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType
 * @subpackage Structs
 */
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient $infoClient
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites $particularites
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient $infoClient = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites $particularites = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient|null
     */
    public function getInfoClient(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient $infoClient
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setInfoClient(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites|null
     */
    public function getParticularites(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites $particularites
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setParticularites(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Particularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
