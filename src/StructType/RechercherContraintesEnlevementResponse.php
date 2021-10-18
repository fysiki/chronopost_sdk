<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse.
 */
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?EsdResultContraintesAgenceValue $return = null;

    /**
     * Constructor method for rechercherContraintesEnlevementResponse.
     *
     * @param EsdResultContraintesAgenceValue $return
     *
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     */
    public function __construct(?EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?EsdResultContraintesAgenceValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param EsdResultContraintesAgenceValue $return
     *
     * @return RechercherContraintesEnlevementResponse
     */
    public function setReturn(?EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
