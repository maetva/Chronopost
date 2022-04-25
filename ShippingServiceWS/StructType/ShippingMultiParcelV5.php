<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV5 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV5
 * @subpackage Structs
 */
class ShippingMultiParcelV5 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2 $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2[]
     */
    protected ?array $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
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
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue[]
     */
    protected ?array $scheduledValue = null;
    /**
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2[]
     */
    protected ?array $recipientLocalValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue[]
     */
    protected ?array $customsValue = null;
    /**
     * Constructor method for shippingMultiParcelV5
     * @uses ShippingMultiParcelV5::setEsdValue()
     * @uses ShippingMultiParcelV5::setHeaderValue()
     * @uses ShippingMultiParcelV5::setShipperValue()
     * @uses ShippingMultiParcelV5::setCustomerValue()
     * @uses ShippingMultiParcelV5::setRecipientValue()
     * @uses ShippingMultiParcelV5::setRefValue()
     * @uses ShippingMultiParcelV5::setSkybillValue()
     * @uses ShippingMultiParcelV5::setSkybillParamsValue()
     * @uses ShippingMultiParcelV5::setPassword()
     * @uses ShippingMultiParcelV5::setModeRetour()
     * @uses ShippingMultiParcelV5::setNumberOfParcel()
     * @uses ShippingMultiParcelV5::setVersion()
     * @uses ShippingMultiParcelV5::setMultiParcel()
     * @uses ShippingMultiParcelV5::setScheduledValue()
     * @uses ShippingMultiParcelV5::setRecipientLocalValue()
     * @uses ShippingMultiParcelV5::setCustomsValue()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2 $headerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2[] $shipperValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2[] $recipientValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2[] $refValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6[] $skybillValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue[] $scheduledValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue[] $customsValue
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2 $headerValue = null, ?array $shipperValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
            ->setScheduledValue($scheduledValue)
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue);
    }
    /**
     * Get esdValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setEsdValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2|null
     */
    public function getHeaderValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2 $headerValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setHeaderValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValueV2 $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2[]
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
        foreach ($values as $shippingMultiParcelV5ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5ShipperValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV5ShipperValueItem) ? get_class($shippingMultiParcelV5ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5ShipperValueItem), var_export($shippingMultiParcelV5ShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2[] $shipperValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToShipperValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2) {
            throw new InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setCustomerValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2[]
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
        foreach ($values as $shippingMultiParcelV5RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5RecipientValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV5RecipientValueItem) ? get_class($shippingMultiParcelV5RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5RecipientValueItem), var_export($shippingMultiParcelV5RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2[] $recipientValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToRecipientValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2[]
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
        foreach ($values as $shippingMultiParcelV5RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5RefValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV5RefValueItem) ? get_class($shippingMultiParcelV5RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5RefValueItem), var_export($shippingMultiParcelV5RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2[] $refValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToRefValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6[]
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
        foreach ($values as $shippingMultiParcelV5SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5SkybillValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6) {
                $invalidValues[] = is_object($shippingMultiParcelV5SkybillValueItem) ? get_class($shippingMultiParcelV5SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5SkybillValueItem), var_export($shippingMultiParcelV5SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6[] $skybillValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToSkybillValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setSkybillParamsValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue[]
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
        foreach ($values as $shippingMultiParcelV5ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5ScheduledValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV5ScheduledValueItem) ? get_class($shippingMultiParcelV5ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5ScheduledValueItem), var_export($shippingMultiParcelV5ScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set scheduledValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue[] $scheduledValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToScheduledValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue) {
            throw new InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;
        
        return $this;
    }
    /**
     * Get recipientLocalValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2[]
     */
    public function getRecipientLocalValue(): ?array
    {
        return $this->recipientLocalValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV5RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5RecipientLocalValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV5RecipientLocalValueItem) ? get_class($shippingMultiParcelV5RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5RecipientLocalValueItem), var_export($shippingMultiParcelV5RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setRecipientLocalValue(?array $recipientLocalValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;
        
        return $this;
    }
    /**
     * Add item to recipientLocalValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToRecipientLocalValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2) {
            throw new InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientLocalValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue[]
     */
    public function getCustomsValue(): ?array
    {
        return $this->customsValue;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintsFromSetCustomsValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV5CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV5CustomsValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV5CustomsValueItem) ? get_class($shippingMultiParcelV5CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV5CustomsValueItem), var_export($shippingMultiParcelV5CustomsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customsValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue[] $customsValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function setCustomsValue(?array $customsValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintsFromSetCustomsValue($customsValue))) {
            throw new InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;
        
        return $this;
    }
    /**
     * Add item to customsValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5
     */
    public function addToCustomsValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue) {
            throw new InvalidArgumentException(sprintf('The customsValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;
        
        return $this;
    }
}
