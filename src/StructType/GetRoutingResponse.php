<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse
 * @subpackage Structs
 */
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultGetRouting|null
     */
    protected ?\StructType\ResultGetRouting $return = null;
    /**
     * Constructor method for getRoutingResponse
     * @uses GetRoutingResponse::setReturn()
     * @param \StructType\ResultGetRouting $return
     */
    public function __construct(?\StructType\ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultGetRouting|null
     */
    public function getReturn(): ?\StructType\ResultGetRouting
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultGetRouting $return
     * @return \StructType\GetRoutingResponse
     */
    public function setReturn(?\StructType\ResultGetRouting $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
