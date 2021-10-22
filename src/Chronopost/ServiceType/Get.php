<?php

declare(strict_types=1);

namespace Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType.
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getReservedSkybillWithType.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetReservedSkybillWithTypeResponse
     */
    public function getReservedSkybillWithType(\Chronopost\StructType\GetReservedSkybillWithType $parameters)
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
     * getReservedSkybillWithTypeAndModeAuth.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse
     */
    public function getReservedSkybillWithTypeAndModeAuth(\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
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
     * getReservedSkybillWithTypeAndModeByReservation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
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
     * Method to call the operation originally named getReservedSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetReservedSkybillResponse
     */
    public function getReservedSkybill(\Chronopost\StructType\GetReservedSkybill $parameters)
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
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function getReservedSkybillWithTypeAndMode(\Chronopost\StructType\GetReservedSkybillWithTypeAndMode $parameters)
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
     * Method to call the operation originally named getShippingInformation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetShippingInformationResponse
     */
    public function getShippingInformation(\Chronopost\StructType\GetShippingInformation $parameters)
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
     * Method to call the operation originally named getRouting.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\GetRoutingResponse
     */
    public function getRouting(\Chronopost\StructType\GetRouting $parameters)
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
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Chronopost\StructType\GetReservedSkybillResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse|\Chronopost\StructType\GetReservedSkybillWithTypeResponse|\Chronopost\StructType\GetRoutingResponse|\Chronopost\StructType\GetShippingInformationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
