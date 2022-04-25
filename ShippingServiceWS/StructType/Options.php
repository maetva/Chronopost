<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for options StructType
 * @subpackage Structs
 */
class Options extends AbstractStructBase
{
    /**
     * The aviserSurRealisation
     * @var bool|null
     */
    protected ?bool $aviserSurRealisation = null;
    /**
     * The chezUnTiers
     * @var bool|null
     */
    protected ?bool $chezUnTiers = null;
    /**
     * The envoyerLtParMail
     * @var bool|null
     */
    protected ?bool $envoyerLtParMail = null;
    /**
     * The LTaImprimerParChronopost
     * @var bool|null
     */
    protected ?bool $LTaImprimerParChronopost = null;
    /**
     * Constructor method for options
     * @uses Options::setAviserSurRealisation()
     * @uses Options::setChezUnTiers()
     * @uses Options::setEnvoyerLtParMail()
     * @uses Options::setLTaImprimerParChronopost()
     * @param bool $aviserSurRealisation
     * @param bool $chezUnTiers
     * @param bool $envoyerLtParMail
     * @param bool $lTaImprimerParChronopost
     */
    public function __construct(?bool $aviserSurRealisation = null, ?bool $chezUnTiers = null, ?bool $envoyerLtParMail = null, ?bool $lTaImprimerParChronopost = null)
    {
        $this
            ->setAviserSurRealisation($aviserSurRealisation)
            ->setChezUnTiers($chezUnTiers)
            ->setEnvoyerLtParMail($envoyerLtParMail)
            ->setLTaImprimerParChronopost($lTaImprimerParChronopost);
    }
    /**
     * Get aviserSurRealisation value
     * @return bool|null
     */
    public function getAviserSurRealisation(): ?bool
    {
        return $this->aviserSurRealisation;
    }
    /**
     * Set aviserSurRealisation value
     * @param bool $aviserSurRealisation
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Options
     */
    public function setAviserSurRealisation(?bool $aviserSurRealisation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($aviserSurRealisation) && !is_bool($aviserSurRealisation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aviserSurRealisation, true), gettype($aviserSurRealisation)), __LINE__);
        }
        $this->aviserSurRealisation = $aviserSurRealisation;
        
        return $this;
    }
    /**
     * Get chezUnTiers value
     * @return bool|null
     */
    public function getChezUnTiers(): ?bool
    {
        return $this->chezUnTiers;
    }
    /**
     * Set chezUnTiers value
     * @param bool $chezUnTiers
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Options
     */
    public function setChezUnTiers(?bool $chezUnTiers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($chezUnTiers) && !is_bool($chezUnTiers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chezUnTiers, true), gettype($chezUnTiers)), __LINE__);
        }
        $this->chezUnTiers = $chezUnTiers;
        
        return $this;
    }
    /**
     * Get envoyerLtParMail value
     * @return bool|null
     */
    public function getEnvoyerLtParMail(): ?bool
    {
        return $this->envoyerLtParMail;
    }
    /**
     * Set envoyerLtParMail value
     * @param bool $envoyerLtParMail
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Options
     */
    public function setEnvoyerLtParMail(?bool $envoyerLtParMail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($envoyerLtParMail) && !is_bool($envoyerLtParMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($envoyerLtParMail, true), gettype($envoyerLtParMail)), __LINE__);
        }
        $this->envoyerLtParMail = $envoyerLtParMail;
        
        return $this;
    }
    /**
     * Get LTaImprimerParChronopost value
     * @return bool|null
     */
    public function getLTaImprimerParChronopost(): ?bool
    {
        return $this->LTaImprimerParChronopost;
    }
    /**
     * Set LTaImprimerParChronopost value
     * @param bool $lTaImprimerParChronopost
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Options
     */
    public function setLTaImprimerParChronopost(?bool $lTaImprimerParChronopost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($lTaImprimerParChronopost) && !is_bool($lTaImprimerParChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lTaImprimerParChronopost, true), gettype($lTaImprimerParChronopost)), __LINE__);
        }
        $this->LTaImprimerParChronopost = $lTaImprimerParChronopost;
        
        return $this;
    }
}
