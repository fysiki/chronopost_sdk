<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\ResultGetReservedSkybillValue|null
     */
    protected ?\StructType\ResultGetReservedSkybillValue $return = null;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?\StructType\ResultGetReservedSkybillValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultGetReservedSkybillValue $return
     * @return \StructType\GetReservedSkybillResponse
     */
    public function setReturn(?\StructType\ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
