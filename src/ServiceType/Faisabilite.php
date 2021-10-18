<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use StructType\FaisabiliteESD;
use StructType\FaisabiliteESDResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Faisabilite ServiceType
 * @subpackage Services
 */
class Faisabilite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD
     * @param FaisabiliteESD $parameters
     * @return FaisabiliteESDResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function faisabiliteESD(FaisabiliteESD $parameters)
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
     * Returns the result
     * @return FaisabiliteESDResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
