<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @subpackage Structs
 */
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultExpeditionValueV3|null
     */
    protected ?\StructType\ResultExpeditionValueV3 $return = null;
    /**
     * Constructor method for shippingV6Response
     * @uses ShippingV6Response::setReturn()
     * @param \StructType\ResultExpeditionValueV3 $return
     */
    public function __construct(?\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultExpeditionValueV3|null
     */
    public function getReturn(): ?\StructType\ResultExpeditionValueV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultExpeditionValueV3 $return
     * @return \StructType\ShippingV6Response
     */
    public function setReturn(?\StructType\ResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
