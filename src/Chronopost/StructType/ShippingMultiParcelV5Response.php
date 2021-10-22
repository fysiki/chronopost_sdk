<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV5Response.
 */
class ShippingMultiParcelV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelV5Response.
     *
     * @uses ShippingMultiParcelV5Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public function getReturn(): ?ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     *
     * @return \Chronopost\StructType\ShippingMultiParcelV5Response
     */
    public function setReturn(?ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
