<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcel StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcel
 * @subpackage Structs
 */
class ShippingMultiParcel extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3 $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue[]
     */
    protected ?array $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue[]
     */
    protected ?array $scheduledValue = null;
    /**
     * Constructor method for shippingMultiParcel
     * @uses ShippingMultiParcel::setEsdValue()
     * @uses ShippingMultiParcel::setHeaderValue()
     * @uses ShippingMultiParcel::setShipperValue()
     * @uses ShippingMultiParcel::setCustomerValue()
     * @uses ShippingMultiParcel::setRecipientValue()
     * @uses ShippingMultiParcel::setRefValue()
     * @uses ShippingMultiParcel::setSkybillValue()
     * @uses ShippingMultiParcel::setSkybillParamsValue()
     * @uses ShippingMultiParcel::setPassword()
     * @uses ShippingMultiParcel::setModeRetour()
     * @uses ShippingMultiParcel::setNumberOfParcel()
     * @uses ShippingMultiParcel::setVersion()
     * @uses ShippingMultiParcel::setMultiParcel()
     * @uses ShippingMultiParcel::setScheduledValue()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue[] $shipperValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue[] $refValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3[] $skybillValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue[] $scheduledValue
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3 $esdValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?array $shipperValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setEsdValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setHeaderValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue[]
     */
    public function getShipperValue(): ?array
    {
        return $this->shipperValue;
    }
    /**
     * This method is responsible for validating the values passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintsFromSetShipperValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelShipperValueItem instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue) {
                $invalidValues[] = is_object($shippingMultiParcelShipperValueItem) ? get_class($shippingMultiParcelShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelShipperValueItem), var_export($shippingMultiParcelShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue[] $shipperValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setShipperValue(?array $shipperValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintsFromSetShipperValue($shipperValue))) {
            throw new InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Add item to shipperValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $item
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function addToShipperValue(\Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue) {
            throw new InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setCustomerValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintsFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelRecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelRecipientValueItem instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelRecipientValueItem) ? get_class($shippingMultiParcelRecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelRecipientValueItem), var_export($shippingMultiParcelRecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintsFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $item
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function addToRecipientValue(\Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintsFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelRefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelRefValueItem instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelRefValueItem) ? get_class($shippingMultiParcelRefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelRefValueItem), var_export($shippingMultiParcelRefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue[] $refValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintsFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $item
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function addToRefValue(\Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the values passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintsFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelSkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelSkybillValueItem instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3) {
                $invalidValues[] = is_object($shippingMultiParcelSkybillValueItem) ? get_class($shippingMultiParcelSkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelSkybillValueItem), var_export($shippingMultiParcelSkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3[] $skybillValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintsFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $item
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function addToSkybillValue(\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setSkybillParamsValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
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
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
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
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
        return $this;
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue[]
     */
    public function getScheduledValue(): ?array
    {
        return $this->scheduledValue;
    }
    /**
     * This method is responsible for validating the values passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintsFromSetScheduledValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelScheduledValueItem instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelScheduledValueItem) ? get_class($shippingMultiParcelScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelScheduledValueItem), var_export($shippingMultiParcelScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set scheduledValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue[] $scheduledValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function setScheduledValue(?array $scheduledValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintsFromSetScheduledValue($scheduledValue))) {
            throw new InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
    /**
     * Add item to scheduledValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $item
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcel
     */
    public function addToScheduledValue(\Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue) {
            throw new InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;
        
        return $this;
    }
}
