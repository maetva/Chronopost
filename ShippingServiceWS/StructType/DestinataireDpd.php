<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\Particularites|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient $infoClient
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\Particularites $particularites
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient $infoClient = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\Particularites $particularites = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?\Maetva\Chronopost\ShippingServiceWS\StructType\AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient|null
     */
    public function getInfoClient(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient $infoClient
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setInfoClient(?\Maetva\Chronopost\ShippingServiceWS\StructType\InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\Particularites|null
     */
    public function getParticularites(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\Particularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\Particularites $particularites
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setParticularites(?\Maetva\Chronopost\ShippingServiceWS\StructType\Particularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?\Maetva\Chronopost\ShippingServiceWS\StructType\ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
