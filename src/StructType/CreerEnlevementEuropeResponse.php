<?php

declare(strict_types=1);

namespace StructType;

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
    protected ?ResultPickupOrCollectionRequest $return = null;

    /**
     * Constructor method for creerEnlevementEuropeResponse.
     *
     * @param ResultPickupOrCollectionRequest $return
     *
     * @uses CreerEnlevementEuropeResponse::setReturn()
     */
    public function __construct(?ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultPickupOrCollectionRequest
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param ResultPickupOrCollectionRequest $return
     *
     * @return CreerEnlevementEuropeResponse
     */
    public function setReturn(?ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
