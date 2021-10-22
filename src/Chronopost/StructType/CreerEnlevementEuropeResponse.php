<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse.
 */
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null;

    /**
     * Constructor method for creerEnlevementEuropeResponse.
     *
     * @uses CreerEnlevementEuropeResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(?ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function getReturn(): ?ResultPickupOrCollectionRequest
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultPickupOrCollectionRequest $return
     *
     * @return \Chronopost\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(?ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
