<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse.
 */
class CreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultEnlevementNational $return = null;

    /**
     * Constructor method for creerEnlevementNationalResponse.
     *
     * @param ResultEnlevementNational $return
     *
     * @uses CreerEnlevementNationalResponse::setReturn()
     */
    public function __construct(?ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultEnlevementNational
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param ResultEnlevementNational $return
     *
     * @return CreerEnlevementNationalResponse
     */
    public function setReturn(?ResultEnlevementNational $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
