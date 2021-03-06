<?php

declare(strict_types=1);

namespace Maetva\Chronopost\TrackingServiceWS\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\TrackWithSenderRef $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\TrackWithSenderRefResponse|bool
     */
    public function trackWithSenderRef(\Maetva\Chronopost\TrackingServiceWS\StructType\TrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultTrackWithSenderRef = $this->getSoapClient()->__soapCall('trackWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSearch $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSearchResponse|bool
     */
    public function trackSearch(\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSearch $parameters)
    {
        try {
            $this->setResult($resultTrackSearch = $this->getSoapClient()->__soapCall('trackSearch', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybillV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillV2 $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillV2Response|bool
     */
    public function trackSkybillV2(\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($resultTrackSkybillV2 = $this->getSoapClient()->__soapCall('trackSkybillV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybillV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybill $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybillResponse|bool
     */
    public function cancelSkybill(\Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelSkybill = $this->getSoapClient()->__soapCall('cancelSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybill $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillResponse|bool
     */
    public function trackSkybill(\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybill $parameters)
    {
        try {
            $this->setResult($resultTrackSkybill = $this->getSoapClient()->__soapCall('trackSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPOD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPOD $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODResponse|bool
     */
    public function searchPOD(\Maetva\Chronopost\TrackingServiceWS\StructType\SearchPOD $parameters)
    {
        try {
            $this->setResult($resultSearchPOD = $this->getSoapClient()->__soapCall('searchPOD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPOD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPODWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRef $parameters
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRefResponse|bool
     */
    public function searchPODWithSenderRef(\Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultSearchPODWithSenderRef = $this->getSoapClient()->__soapCall('searchPODWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPODWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybillResponse|\Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODResponse|\Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRefResponse|\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSearchResponse|\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillResponse|\Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillV2Response|\Maetva\Chronopost\TrackingServiceWS\StructType\TrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
