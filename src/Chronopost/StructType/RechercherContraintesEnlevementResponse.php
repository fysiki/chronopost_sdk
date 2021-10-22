<?php

declare(strict_types=1);

namespace Chronopost\StructType;

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
    protected ?\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null;

    /**
     * Constructor method for rechercherContraintesEnlevementResponse.
     *
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     *
     * @param \Chronopost\StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(?EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\EsdResultContraintesAgenceValue
     */
    public function getReturn(): ?EsdResultContraintesAgenceValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\EsdResultContraintesAgenceValue $return
     *
     * @return \Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(?EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
