<?php

declare(strict_types=1);

namespace Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Faisabilite ServiceType.
 */
class Faisabilite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\FaisabiliteESDResponse
     */
    public function faisabiliteESD(\Chronopost\StructType\FaisabiliteESD $parameters)
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
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Chronopost\StructType\FaisabiliteESDResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
