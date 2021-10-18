<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use StructType\ShippingMultiParcel;
use StructType\ShippingMultiParcelResponse;
use StructType\ShippingMultiParcelV2;
use StructType\ShippingMultiParcelV2Response;
use StructType\ShippingMultiParcelV3;
use StructType\ShippingMultiParcelV3Response;
use StructType\ShippingMultiParcelV4;
use StructType\ShippingMultiParcelV4Response;
use StructType\ShippingMultiParcelV5;
use StructType\ShippingMultiParcelV5Response;
use StructType\ShippingMultiParcelWithReservation;
use StructType\ShippingMultiParcelWithReservationResponse;
use StructType\ShippingMultiParcelWithReservationV2;
use StructType\ShippingMultiParcelWithReservationV2Response;
use StructType\ShippingMultiParcelWithReservationV3;
use StructType\ShippingMultiParcelWithReservationV3Response;
use StructType\ShippingResponse;
use StructType\ShippingV2;
use StructType\ShippingV2Response;
use StructType\ShippingV3;
use StructType\ShippingV3Response;
use StructType\ShippingV4;
use StructType\ShippingV4Response;
use StructType\ShippingV5;
use StructType\ShippingV5Response;
use StructType\ShippingV6;
use StructType\ShippingV6Response;
use StructType\ShippingV7;
use StructType\ShippingV7Response;
use StructType\ShippingWithESDOnly;
use StructType\ShippingWithESDOnlyResponse;
use StructType\ShippingWithESDOnlyV2;
use StructType\ShippingWithESDOnlyV2Response;
use StructType\ShippingWithReservation;
use StructType\ShippingWithReservationAndESDWithRefClient;
use StructType\ShippingWithReservationAndESDWithRefClientPC;
use StructType\ShippingWithReservationAndESDWithRefClientPCResponse;
use StructType\ShippingWithReservationAndESDWithRefClientResponse;
use StructType\ShippingWithReservationResponse;
use StructType\ShippingWithReservationV2;
use StructType\ShippingWithReservationV2Response;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping ServiceType
 * @subpackage Services
 */
class Shipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named shippingV2
     * @param ShippingV2 $parameters
     * @return ShippingV2Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV2(ShippingV2 $parameters)
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
     * @param ShippingV3 $parameters
     * @return ShippingV3Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV3(ShippingV3 $parameters)
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
     * Method to call the operation originally named shippingMultiParcel
     * @param ShippingMultiParcel $parameters
     * @return ShippingMultiParcelResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcel(ShippingMultiParcel $parameters)
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
     * @param ShippingWithESDOnlyV2 $parameters
     * @return ShippingWithESDOnlyV2Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithESDOnlyV2(ShippingWithESDOnlyV2 $parameters)
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
     * @param ShippingWithReservationV2 $parameters
     * @return ShippingWithReservationV2Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithReservationV2(ShippingWithReservationV2 $parameters)
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
     * @param \StructType\Shipping $parameters
     * @return ShippingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shipping(\StructType\Shipping $parameters)
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
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @param ShippingMultiParcelWithReservation $parameters
     * @return ShippingMultiParcelWithReservationResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelWithReservation(ShippingMultiParcelWithReservation $parameters)
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
     * @param ShippingMultiParcelV4 $parameters
     * @return ShippingMultiParcelV4Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelV4(ShippingMultiParcelV4 $parameters)
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
     * @param ShippingMultiParcelV5 $parameters
     * @return ShippingMultiParcelV5Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelV5(ShippingMultiParcelV5 $parameters)
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
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @param ShippingMultiParcelWithReservationV3 $parameters
     * @return ShippingMultiParcelWithReservationV3Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelWithReservationV3(ShippingMultiParcelWithReservationV3 $parameters)
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
     * Method to call the operation originally named shippingMultiParcelV2
     * @param ShippingMultiParcelV2 $parameters
     * @return ShippingMultiParcelV2Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelV2(ShippingMultiParcelV2 $parameters)
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
     * Method to call the operation originally named shippingV6
     * @param ShippingV6 $parameters
     * @return ShippingV6Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV6(ShippingV6 $parameters)
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
     * Method to call the operation originally named shippingWithReservation
     * @param ShippingWithReservation $parameters
     * @return ShippingWithReservationResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithReservation(ShippingWithReservation $parameters)
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
     * Method to call the operation originally named shippingV7
     * @param ShippingV7 $parameters
     * @return ShippingV7Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV7(ShippingV7 $parameters)
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
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @param ShippingWithReservationAndESDWithRefClient $parameters
     * @return ShippingWithReservationAndESDWithRefClientResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithReservationAndESDWithRefClient(ShippingWithReservationAndESDWithRefClient $parameters)
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
     * Method to call the operation originally named shippingV4
     * @param ShippingV4 $parameters
     * @return ShippingV4Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV4(ShippingV4 $parameters)
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
     * @param ShippingV5 $parameters
     * @return ShippingV5Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingV5(ShippingV5 $parameters)
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
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @param ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return ShippingWithReservationAndESDWithRefClientPCResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithReservationAndESDWithRefClientPC(ShippingWithReservationAndESDWithRefClientPC $parameters)
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
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @param ShippingMultiParcelWithReservationV2 $parameters
     * @return ShippingMultiParcelWithReservationV2Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelWithReservationV2(ShippingMultiParcelWithReservationV2 $parameters)
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
     * Method to call the operation originally named shippingWithESDOnly
     * @param ShippingWithESDOnly $parameters
     * @return ShippingWithESDOnlyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingWithESDOnly(ShippingWithESDOnly $parameters)
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
     * Method to call the operation originally named shippingMultiParcelV3
     * @param ShippingMultiParcelV3 $parameters
     * @return ShippingMultiParcelV3Response|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function shippingMultiParcelV3(ShippingMultiParcelV3 $parameters)
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
     * Returns the result
     * @return ShippingMultiParcelResponse|ShippingMultiParcelV2Response|ShippingMultiParcelV3Response|ShippingMultiParcelV4Response|ShippingMultiParcelV5Response|ShippingMultiParcelWithReservationResponse|ShippingMultiParcelWithReservationV2Response|ShippingMultiParcelWithReservationV3Response|ShippingResponse|ShippingV2Response|ShippingV3Response|ShippingV4Response|ShippingV5Response|ShippingV6Response|ShippingV7Response|ShippingWithESDOnlyResponse|ShippingWithESDOnlyV2Response|ShippingWithReservationAndESDWithRefClientPCResponse|ShippingWithReservationAndESDWithRefClientResponse|ShippingWithReservationResponse|ShippingWithReservationV2Response
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
