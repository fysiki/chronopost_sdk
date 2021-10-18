<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV3Response
 * @subpackage Structs
 */
class ShippingMultiParcelV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultMultiParcelExpeditionValue|null
     */
    protected ?\StructType\ResultMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelV3Response
     * @uses ShippingMultiParcelV3Response::setReturn()
     * @param \StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\StructType\ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultMultiParcelExpeditionValue $return
     * @return \StructType\ShippingMultiParcelV3Response
     */
    public function setReturn(?\StructType\ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
