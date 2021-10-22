<?php

declare(strict_types=1);

namespace Chronopost\StructType;

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
    protected ?\Chronopost\StructType\ResultEnlevementNational $return = null;

    /**
     * Constructor method for creerEnlevementNationalResponse.
     *
     * @uses CreerEnlevementNationalResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultEnlevementNational $return
     */
    public function __construct(?ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultEnlevementNational
     */
    public function getReturn(): ?ResultEnlevementNational
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultEnlevementNational $return
     *
     * @return \Chronopost\StructType\CreerEnlevementNationalResponse
     */
    public function setReturn(?ResultEnlevementNational $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
