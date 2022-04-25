<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultExpeditionValueV3 StructType
 * @subpackage Structs
 */
class ResultExpeditionValueV3 extends ResultExpeditionValue
{
    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeDepot = null;
    /**
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeService = null;
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDepot = null;
    /**
     * The geoPostCodeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geoPostCodeBarre = null;
    /**
     * The geoPostNumeroColis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geoPostNumeroColis = null;
    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupingPriorityLabel = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceMark = null;
    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The signaletiqueProduit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signaletiqueProduit = null;
    /**
     * The dSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dSort = null;
    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $oSort = null;
    /**
     * Constructor method for resultExpeditionValueV3
     * @uses ResultExpeditionValueV3::setCodeDepot()
     * @uses ResultExpeditionValueV3::setCodeService()
     * @uses ResultExpeditionValueV3::setDestinationDepot()
     * @uses ResultExpeditionValueV3::setGeoPostCodeBarre()
     * @uses ResultExpeditionValueV3::setGeoPostNumeroColis()
     * @uses ResultExpeditionValueV3::setGroupingPriorityLabel()
     * @uses ResultExpeditionValueV3::setServiceMark()
     * @uses ResultExpeditionValueV3::setServiceName()
     * @uses ResultExpeditionValueV3::setSignaletiqueProduit()
     * @uses ResultExpeditionValueV3::setDSort()
     * @uses ResultExpeditionValueV3::setOSort()
     * @param string $codeDepot
     * @param string $codeService
     * @param string $destinationDepot
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $dSort
     * @param string $oSort
     */
    public function __construct(?string $codeDepot = null, ?string $codeService = null, ?string $destinationDepot = null, ?string $geoPostCodeBarre = null, ?string $geoPostNumeroColis = null, ?string $groupingPriorityLabel = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $dSort = null, ?string $oSort = null)
    {
        $this
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setDSort($dSort)
            ->setOSort($oSort);
    }
    /**
     * Get codeDepot value
     * @return string|null
     */
    public function getCodeDepot(): ?string
    {
        return $this->codeDepot;
    }
    /**
     * Set codeDepot value
     * @param string $codeDepot
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setCodeDepot(?string $codeDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDepot) && !is_string($codeDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepot, true), gettype($codeDepot)), __LINE__);
        }
        $this->codeDepot = $codeDepot;
        
        return $this;
    }
    /**
     * Get codeService value
     * @return string|null
     */
    public function getCodeService(): ?string
    {
        return $this->codeService;
    }
    /**
     * Set codeService value
     * @param string $codeService
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setCodeService(?string $codeService = null): self
    {
        // validation for constraint: string
        if (!is_null($codeService) && !is_string($codeService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeService, true), gettype($codeService)), __LINE__);
        }
        $this->codeService = $codeService;
        
        return $this;
    }
    /**
     * Get destinationDepot value
     * @return string|null
     */
    public function getDestinationDepot(): ?string
    {
        return $this->destinationDepot;
    }
    /**
     * Set destinationDepot value
     * @param string $destinationDepot
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setDestinationDepot(?string $destinationDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDepot) && !is_string($destinationDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDepot, true), gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;
        
        return $this;
    }
    /**
     * Get geoPostCodeBarre value
     * @return string|null
     */
    public function getGeoPostCodeBarre(): ?string
    {
        return $this->geoPostCodeBarre;
    }
    /**
     * Set geoPostCodeBarre value
     * @param string $geoPostCodeBarre
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setGeoPostCodeBarre(?string $geoPostCodeBarre = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostCodeBarre) && !is_string($geoPostCodeBarre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostCodeBarre, true), gettype($geoPostCodeBarre)), __LINE__);
        }
        $this->geoPostCodeBarre = $geoPostCodeBarre;
        
        return $this;
    }
    /**
     * Get geoPostNumeroColis value
     * @return string|null
     */
    public function getGeoPostNumeroColis(): ?string
    {
        return $this->geoPostNumeroColis;
    }
    /**
     * Set geoPostNumeroColis value
     * @param string $geoPostNumeroColis
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setGeoPostNumeroColis(?string $geoPostNumeroColis = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostNumeroColis) && !is_string($geoPostNumeroColis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostNumeroColis, true), gettype($geoPostNumeroColis)), __LINE__);
        }
        $this->geoPostNumeroColis = $geoPostNumeroColis;
        
        return $this;
    }
    /**
     * Get groupingPriorityLabel value
     * @return string|null
     */
    public function getGroupingPriorityLabel(): ?string
    {
        return $this->groupingPriorityLabel;
    }
    /**
     * Set groupingPriorityLabel value
     * @param string $groupingPriorityLabel
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setGroupingPriorityLabel(?string $groupingPriorityLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;
        
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get signaletiqueProduit value
     * @return string|null
     */
    public function getSignaletiqueProduit(): ?string
    {
        return $this->signaletiqueProduit;
    }
    /**
     * Set signaletiqueProduit value
     * @param string $signaletiqueProduit
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setSignaletiqueProduit(?string $signaletiqueProduit = null): self
    {
        // validation for constraint: string
        if (!is_null($signaletiqueProduit) && !is_string($signaletiqueProduit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signaletiqueProduit, true), gettype($signaletiqueProduit)), __LINE__);
        }
        $this->signaletiqueProduit = $signaletiqueProduit;
        
        return $this;
    }
    /**
     * Get dSort value
     * @return string|null
     */
    public function getDSort(): ?string
    {
        return $this->dSort;
    }
    /**
     * Set dSort value
     * @param string $dSort
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;
        
        return $this;
    }
    /**
     * Get oSort value
     * @return string|null
     */
    public function getOSort(): ?string
    {
        return $this->oSort;
    }
    /**
     * Set oSort value
     * @param string $oSort
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValueV3
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;
        
        return $this;
    }
}
