<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use StructType\GetReservedSkybill;
use StructType\GetReservedSkybillResponse;
use StructType\GetReservedSkybillWithType;
use StructType\GetReservedSkybillWithTypeAndMode;
use StructType\GetReservedSkybillWithTypeAndModeAuth;
use StructType\GetReservedSkybillWithTypeAndModeAuthResponse;
use StructType\GetReservedSkybillWithTypeAndModeByReservation;
use StructType\GetReservedSkybillWithTypeAndModeByReservationResponse;
use StructType\GetReservedSkybillWithTypeAndModeResponse;
use StructType\GetReservedSkybillWithTypeResponse;
use StructType\GetRouting;
use StructType\GetRoutingResponse;
use StructType\GetShippingInformation;
use StructType\GetShippingInformationResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getReservedSkybillWithType
     * @param GetReservedSkybillWithType $parameters
     * @return GetReservedSkybillWithTypeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReservedSkybillWithType(GetReservedSkybillWithType $parameters)
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
     * @param GetReservedSkybillWithTypeAndModeAuth $parameters
     * @return GetReservedSkybillWithTypeAndModeAuthResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReservedSkybillWithTypeAndModeAuth(GetReservedSkybillWithTypeAndModeAuth $parameters)
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
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation
     * @param GetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReservedSkybillWithTypeAndModeByReservation(GetReservedSkybillWithTypeAndModeByReservation $parameters)
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
     * Method to call the operation originally named getReservedSkybill
     * @param GetReservedSkybill $parameters
     * @return GetReservedSkybillResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReservedSkybill(GetReservedSkybill $parameters)
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
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode
     * @param GetReservedSkybillWithTypeAndMode $parameters
     * @return GetReservedSkybillWithTypeAndModeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReservedSkybillWithTypeAndMode(GetReservedSkybillWithTypeAndMode $parameters)
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
     * Method to call the operation originally named getShippingInformation
     * @param GetShippingInformation $parameters
     * @return GetShippingInformationResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getShippingInformation(GetShippingInformation $parameters)
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
     * @param GetRouting $parameters
     * @return GetRoutingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getRouting(GetRouting $parameters)
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
     * @return GetReservedSkybillResponse|GetReservedSkybillWithTypeAndModeAuthResponse|GetReservedSkybillWithTypeAndModeByReservationResponse|GetReservedSkybillWithTypeAndModeResponse|GetReservedSkybillWithTypeResponse|GetRoutingResponse|GetShippingInformationResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
