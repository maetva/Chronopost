<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listEventInfoComps StructType
 * @subpackage Structs
 */
class ListEventInfoComps extends AbstractStructBase
{
    /**
     * The events
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp[]
     */
    protected ?array $events = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * Constructor method for listEventInfoComps
     * @uses ListEventInfoComps::setEvents()
     * @uses ListEventInfoComps::setSkybillNumber()
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp[] $events
     * @param string $skybillNumber
     */
    public function __construct(?array $events = null, ?string $skybillNumber = null)
    {
        $this
            ->setEvents($events)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp[]
     */
    public function getEvents(): ?array
    {
        return isset($this->events) ? $this->events : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEvents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventsForArrayConstraintsFromSetEvents(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listEventInfoCompsEventsItem) {
            // validation for constraint: itemType
            if (!$listEventInfoCompsEventsItem instanceof \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp) {
                $invalidValues[] = is_object($listEventInfoCompsEventsItem) ? get_class($listEventInfoCompsEventsItem) : sprintf('%s(%s)', gettype($listEventInfoCompsEventsItem), var_export($listEventInfoCompsEventsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The events property can only contain items of type \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp[] $events
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEventInfoComps
     */
    public function setEvents(?array $events = null): self
    {
        // validation for constraint: array
        if ('' !== ($eventsArrayErrorMessage = self::validateEventsForArrayConstraintsFromSetEvents($events))) {
            throw new InvalidArgumentException($eventsArrayErrorMessage, __LINE__);
        }
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->events);
        } else {
            $this->events = $events;
        }
        
        return $this;
    }
    /**
     * Add item to events value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp $item
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEventInfoComps
     */
    public function addToEvents(\Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp) {
            throw new InvalidArgumentException(sprintf('The events property can only contain items of type \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\EventInfoComp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->events[] = $item;
        
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \Drupal\commerce_chronopost\Endpoint\TrackingServiceWS\StructType\ListEventInfoComps
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
}
