<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\StructType\ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
