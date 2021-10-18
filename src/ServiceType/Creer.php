<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use StructType\CreerEnlevementEurope;
use StructType\CreerEnlevementEuropeResponse;
use StructType\CreerEnlevementNational;
use StructType\CreerEnlevementNationalResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer ServiceType
 * @subpackage Services
 */
class Creer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @param CreerEnlevementNational $parameters
     * @return CreerEnlevementNationalResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function creerEnlevementNational(CreerEnlevementNational $parameters)
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
     * Method to call the operation originally named creerEnlevementEurope
     * @param CreerEnlevementEurope $parameters
     * @return CreerEnlevementEuropeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function creerEnlevementEurope(CreerEnlevementEurope $parameters)
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
     * Returns the result
     * @return CreerEnlevementEuropeResponse|CreerEnlevementNationalResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
