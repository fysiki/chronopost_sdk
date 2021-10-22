<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV4Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV4Response.
 */
class ShippingMultiParcelV4Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelV4Response.
     *
     * @uses ShippingMultiParcelV4Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4Response
     */
    public function setReturn(?ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
