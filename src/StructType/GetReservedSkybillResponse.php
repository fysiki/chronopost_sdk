<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse
 * @subpackage Structs
 */
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultGetReservedSkybillValue|null
     */
    protected ?ResultGetReservedSkybillValue $return = null;

    /**
     * Constructor method for getReservedSkybillResponse
     * @param ResultGetReservedSkybillValue $return
     * @uses GetReservedSkybillResponse::setReturn()
     */
    public function __construct(?ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?ResultGetReservedSkybillValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultGetReservedSkybillValue $return
     * @return GetReservedSkybillResponse
     */
    public function setReturn(?ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
