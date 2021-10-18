<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use StructType\AnnulerEnlevements;
use StructType\AnnulerEnlevementsResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler ServiceType
 * @subpackage Services
 */
class Annuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevements
     * @param AnnulerEnlevements $parameters
     * @return AnnulerEnlevementsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function annulerEnlevements(AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAnnulerEnlevements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return AnnulerEnlevementsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
