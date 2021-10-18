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
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Faisabilite ServiceType
 */
$faisabilite = new \ServiceType\Faisabilite($options);
/**
 * Sample call for faisabiliteESD operation/method
 */
if ($faisabilite->faisabiliteESD(new \StructType\FaisabiliteESD()) !== false) {
    print_r($faisabilite->getResult());
} else {
    print_r($faisabilite->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getReservedSkybillWithType operation/method
 */
if ($get->getReservedSkybillWithType(new \StructType\GetReservedSkybillWithType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeAuth operation/method
 */
if ($get->getReservedSkybillWithTypeAndModeAuth(new \StructType\GetReservedSkybillWithTypeAndModeAuth()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeByReservation operation/method
 */
if ($get->getReservedSkybillWithTypeAndModeByReservation(new \StructType\GetReservedSkybillWithTypeAndModeByReservation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybill operation/method
 */
if ($get->getReservedSkybill(new \StructType\GetReservedSkybill()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndMode operation/method
 */
if ($get->getReservedSkybillWithTypeAndMode(new \StructType\GetReservedSkybillWithTypeAndMode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShippingInformation operation/method
 */
if ($get->getShippingInformation(new \StructType\GetShippingInformation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRouting operation/method
 */
if ($get->getRouting(new \StructType\GetRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Shipping ServiceType
 */
$shipping = new \ServiceType\Shipping($options);
/**
 * Sample call for shippingV2 operation/method
 */
if ($shipping->shippingV2(new \StructType\ShippingV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV3 operation/method
 */
if ($shipping->shippingV3(new \StructType\ShippingV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcel operation/method
 */
if ($shipping->shippingMultiParcel(new \StructType\ShippingMultiParcel()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithESDOnlyV2 operation/method
 */
if ($shipping->shippingWithESDOnlyV2(new \StructType\ShippingWithESDOnlyV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservationV2 operation/method
 */
if ($shipping->shippingWithReservationV2(new \StructType\ShippingWithReservationV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shipping operation/method
 */
if ($shipping->shipping(new \StructType\Shipping()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservation operation/method
 */
if ($shipping->shippingMultiParcelWithReservation(new \StructType\ShippingMultiParcelWithReservation()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV4 operation/method
 */
if ($shipping->shippingMultiParcelV4(new \StructType\ShippingMultiParcelV4()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV5 operation/method
 */
if ($shipping->shippingMultiParcelV5(new \StructType\ShippingMultiParcelV5()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV3 operation/method
 */
if ($shipping->shippingMultiParcelWithReservationV3(new \StructType\ShippingMultiParcelWithReservationV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV2 operation/method
 */
if ($shipping->shippingMultiParcelV2(new \StructType\ShippingMultiParcelV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV6 operation/method
 */
if ($shipping->shippingV6(new \StructType\ShippingV6()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservation operation/method
 */
if ($shipping->shippingWithReservation(new \StructType\ShippingWithReservation()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV7 operation/method
 */
if ($shipping->shippingV7(new \StructType\ShippingV7()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservationAndESDWithRefClient operation/method
 */
if ($shipping->shippingWithReservationAndESDWithRefClient(new \StructType\ShippingWithReservationAndESDWithRefClient()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV4 operation/method
 */
if ($shipping->shippingV4(new \StructType\ShippingV4()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV5 operation/method
 */
if ($shipping->shippingV5(new \StructType\ShippingV5()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservationAndESDWithRefClientPC operation/method
 */
if ($shipping->shippingWithReservationAndESDWithRefClientPC(new \StructType\ShippingWithReservationAndESDWithRefClientPC()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV2 operation/method
 */
if ($shipping->shippingMultiParcelWithReservationV2(new \StructType\ShippingMultiParcelWithReservationV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithESDOnly operation/method
 */
if ($shipping->shippingWithESDOnly(new \StructType\ShippingWithESDOnly()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV3 operation/method
 */
if ($shipping->shippingMultiParcelV3(new \StructType\ShippingMultiParcelV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Samples for Creer ServiceType
 */
$creer = new \ServiceType\Creer($options);
/**
 * Sample call for creerEnlevementNational operation/method
 */
if ($creer->creerEnlevementNational(new \StructType\CreerEnlevementNational()) !== false) {
    print_r($creer->getResult());
} else {
    print_r($creer->getLastError());
}
/**
 * Sample call for creerEnlevementEurope operation/method
 */
if ($creer->creerEnlevementEurope(new \StructType\CreerEnlevementEurope()) !== false) {
    print_r($creer->getResult());
} else {
    print_r($creer->getLastError());
}
/**
 * Samples for Rechercher ServiceType
 */
$rechercher = new \ServiceType\Rechercher($options);
/**
 * Sample call for rechercherContraintesEnlevement operation/method
 */
if ($rechercher->rechercherContraintesEnlevement(new \StructType\RechercherContraintesEnlevement()) !== false) {
    print_r($rechercher->getResult());
} else {
    print_r($rechercher->getLastError());
}
/**
 * Samples for Annuler ServiceType
 */
$annuler = new \ServiceType\Annuler($options);
/**
 * Sample call for annulerEnlevements operation/method
 */
if ($annuler->annulerEnlevements(new \StructType\AnnulerEnlevements()) !== false) {
    print_r($annuler->getResult());
} else {
    print_r($annuler->getLastError());
}
