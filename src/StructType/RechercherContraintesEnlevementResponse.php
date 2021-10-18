<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @subpackage Structs
 */
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EsdResultContraintesAgenceValue|null
     */
    protected ?\StructType\EsdResultContraintesAgenceValue $return = null;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     * @param \StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(?\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\EsdResultContraintesAgenceValue|null
     */
    public function getReturn(): ?\StructType\EsdResultContraintesAgenceValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\EsdResultContraintesAgenceValue $return
     * @return \StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(?\StructType\EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
