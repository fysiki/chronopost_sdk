<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse.
 */
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultGetReservedSkybillValue $return = null;

    /**
     * Constructor method for getReservedSkybillResponse.
     *
     * @uses GetReservedSkybillResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultGetReservedSkybillValue
     */
    public function getReturn(): ?ResultGetReservedSkybillValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultGetReservedSkybillValue $return
     *
     * @return \Chronopost\StructType\GetReservedSkybillResponse
     */
    public function setReturn(?ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
