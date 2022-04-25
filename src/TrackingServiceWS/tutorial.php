<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maetva\Chronopost\TrackingServiceWS\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Maetva\Chronopost\TrackingServiceWS\ServiceType\Service($options);
/**
 * Sample call for trackWithSenderRef operation/method
 */
if ($service->trackWithSenderRef(new \Maetva\Chronopost\TrackingServiceWS\StructType\TrackWithSenderRef()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for trackSearch operation/method
 */
if ($service->trackSearch(new \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSearch()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for trackSkybillV2 operation/method
 */
if ($service->trackSkybillV2(new \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybillV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cancelSkybill operation/method
 */
if ($service->cancelSkybill(new \Maetva\Chronopost\TrackingServiceWS\StructType\CancelSkybill()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for trackSkybill operation/method
 */
if ($service->trackSkybill(new \Maetva\Chronopost\TrackingServiceWS\StructType\TrackSkybill()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for searchPOD operation/method
 */
if ($service->searchPOD(new \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPOD()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for searchPODWithSenderRef operation/method
 */
if ($service->searchPODWithSenderRef(new \Maetva\Chronopost\TrackingServiceWS\StructType\SearchPODWithSenderRef()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
