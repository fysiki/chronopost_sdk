<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse.
 */
class GetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null;

    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse.
     *
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
     */
    public function getReturn(): ?ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     *
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
