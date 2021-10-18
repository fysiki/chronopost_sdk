<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?ResultGetReservedSkybillWithTypeValue $return = null;

    /**
     * Constructor method for getReservedSkybillWithTypeResponse
     * @param ResultGetReservedSkybillWithTypeValue $return
     * @uses GetReservedSkybillWithTypeResponse::setReturn()
     */
    public function __construct(?ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultGetReservedSkybillWithTypeValue $return
     * @return GetReservedSkybillWithTypeResponse
     */
    public function setReturn(?ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
