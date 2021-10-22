<?php

declare(strict_types=1);

namespace Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rechercher ServiceType.
 */
class Rechercher extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rechercherContraintesEnlevement.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function rechercherContraintesEnlevement(\Chronopost\StructType\RechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevement = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevement', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultRechercherContraintesEnlevement;
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
     * @return \Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
