<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse|bool
     */
    public function faisabiliteESD(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD $parameters)
    {
        try {
            $this->setResult($resultFaisabiliteESD = $this->getSoapClient()->__soapCall('faisabiliteESD', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultFaisabiliteESD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithType = $this->getSoapClient()->__soapCall('getReservedSkybillWithType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeAuth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeAuth = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeAuth', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndModeAuth;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2 $parameters)
    {
        try {
            $this->setResult($resultShippingV2 = $this->getSoapClient()->__soapCall('shippingV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3 $parameters)
    {
        try {
            $this->setResult($resultShippingV3 = $this->getSoapClient()->__soapCall('shippingV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6 $parameters)
    {
        try {
            $this->setResult($resultShippingV6 = $this->getSoapClient()->__soapCall('shippingV6', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV6;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7 $parameters)
    {
        try {
            $this->setResult($resultShippingV7 = $this->getSoapClient()->__soapCall('shippingV7', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV7;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4 $parameters)
    {
        try {
            $this->setResult($resultShippingV4 = $this->getSoapClient()->__soapCall('shippingV4', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5 $parameters)
    {
        try {
            $this->setResult($resultShippingV5 = $this->getSoapClient()->__soapCall('shippingV5', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNational $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementNational = $this->getSoapClient()->__soapCall('creerEnlevementNational', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreerEnlevementNational;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeByReservation = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeByReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndModeByReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcel $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcel = $this->getSoapClient()->__soapCall('shippingMultiParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnlyV2 = $this->getSoapClient()->__soapCall('shippingWithESDOnlyV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithESDOnlyV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationV2 = $this->getSoapClient()->__soapCall('shippingWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Shipping $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingResponse|bool
     */
    public function shipping(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Shipping $parameters)
    {
        try {
            $this->setResult($resultShipping = $this->getSoapClient()->__soapCall('shipping', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybill $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybill $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybill = $this->getSoapClient()->__soapCall('getReservedSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservation = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV4 = $this->getSoapClient()->__soapCall('shippingMultiParcelV4', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV4;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV5 = $this->getSoapClient()->__soapCall('shippingMultiParcelV5', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV5;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservationV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2 $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservationV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservation = $this->getSoapClient()->__soapCall('shippingWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercherContraintesEnlevement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevement $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevement = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevement', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultRechercherContraintesEnlevement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named annulerEnlevements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevements $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAnnulerEnlevements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementEurope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementEurope = $this->getSoapClient()->__soapCall('creerEnlevementEurope', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreerEnlevementEurope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClient $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClient = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClient', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationAndESDWithRefClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndMode $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndMode $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndMode = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndMode', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClientPC = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClientPC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationAndESDWithRefClientPC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnly = $this->getSoapClient()->__soapCall('shippingWithESDOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithESDOnly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getShippingInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformationResponse|bool
     */
    public function getShippingInformation(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation $parameters)
    {
        try {
            $this->setResult($resultGetShippingInformation = $this->getSoapClient()->__soapCall('getShippingInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShippingInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetRouting $parameters
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetRoutingResponse|bool
     */
    public function getRouting(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetRouting $parameters)
    {
        try {
            $this->setResult($resultGetRouting = $this->getSoapClient()->__soapCall('getRouting', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRouting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNationalResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetRoutingResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformationResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevementResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2Response|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationResponse|\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
