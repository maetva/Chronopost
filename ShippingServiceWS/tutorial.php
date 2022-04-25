<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maetva\Chronopost\Endpoint\ShippingServiceWS\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Maetva\Chronopost\Endpoint\ShippingServiceWS\ServiceType\Service($options);
/**
 * Sample call for faisabiliteESD operation/method
 */
if ($service->faisabiliteESD(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESD()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getReservedSkybillWithType operation/method
 */
if ($service->getReservedSkybillWithType(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeAuth operation/method
 */
if ($service->getReservedSkybillWithTypeAndModeAuth(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeAuth()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV2 operation/method
 */
if ($service->shippingV2(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV3 operation/method
 */
if ($service->shippingV3(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV3()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV6 operation/method
 */
if ($service->shippingV6(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV7 operation/method
 */
if ($service->shippingV7(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV4 operation/method
 */
if ($service->shippingV4(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV4()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingV5 operation/method
 */
if ($service->shippingV5(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for creerEnlevementNational operation/method
 */
if ($service->creerEnlevementNational(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementNational()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeByReservation operation/method
 */
if ($service->getReservedSkybillWithTypeAndModeByReservation(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservation()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcel operation/method
 */
if ($service->shippingMultiParcel(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcel()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithESDOnlyV2 operation/method
 */
if ($service->shippingWithESDOnlyV2(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnlyV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithReservationV2 operation/method
 */
if ($service->shippingWithReservationV2(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shipping operation/method
 */
if ($service->shipping(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\Shipping()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getReservedSkybill operation/method
 */
if ($service->getReservedSkybill(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybill()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservation operation/method
 */
if ($service->shippingMultiParcelWithReservation(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelV4 operation/method
 */
if ($service->shippingMultiParcelV4(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelV5 operation/method
 */
if ($service->shippingMultiParcelV5(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV5()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelV2 operation/method
 */
if ($service->shippingMultiParcelV2(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelV3 operation/method
 */
if ($service->shippingMultiParcelV3(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV3()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV3 operation/method
 */
if ($service->shippingMultiParcelWithReservationV3(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV3()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV2 operation/method
 */
if ($service->shippingMultiParcelWithReservationV2(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithReservation operation/method
 */
if ($service->shippingWithReservation(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for rechercherContraintesEnlevement operation/method
 */
if ($service->rechercherContraintesEnlevement(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RechercherContraintesEnlevement()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for annulerEnlevements operation/method
 */
if ($service->annulerEnlevements(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevements()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for creerEnlevementEurope operation/method
 */
if ($service->creerEnlevementEurope(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CreerEnlevementEurope()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithReservationAndESDWithRefClient operation/method
 */
if ($service->shippingWithReservationAndESDWithRefClient(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClient()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndMode operation/method
 */
if ($service->getReservedSkybillWithTypeAndMode(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndMode()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithReservationAndESDWithRefClientPC operation/method
 */
if ($service->shippingWithReservationAndESDWithRefClientPC(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientPC()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for shippingWithESDOnly operation/method
 */
if ($service->shippingWithESDOnly(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getShippingInformation operation/method
 */
if ($service->getShippingInformation(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getRouting operation/method
 */
if ($service->getRouting(new \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetRouting()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
