<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\ServiceType;

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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse|bool
     */
    public function faisabiliteESD(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNational $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNational $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcel $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcel $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Shipping $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingResponse|bool
     */
    public function shipping(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Shipping $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybill $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybill $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2 $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2 $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevement $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevement $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevements $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevements $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClient $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndMode $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndMode $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformationResponse|bool
     */
    public function getShippingInformation(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation $parameters)
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetRouting $parameters
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetRoutingResponse|bool
     */
    public function getRouting(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetRouting $parameters)
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNationalResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetRoutingResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformationResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevementResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2Response|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationResponse|\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
