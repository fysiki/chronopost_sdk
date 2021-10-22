<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse.
 */
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultGetRouting $return = null;

    /**
     * Constructor method for getRoutingResponse.
     *
     * @uses GetRoutingResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultGetRouting $return
     */
    public function __construct(?ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultGetRouting
     */
    public function getReturn(): ?ResultGetRouting
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultGetRouting $return
     *
     * @return \Chronopost\StructType\GetRoutingResponse
     */
    public function setReturn(?ResultGetRouting $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
