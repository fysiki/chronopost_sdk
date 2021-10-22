<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV3Response.
 */
class ShippingV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultExpeditionValue $return = null;

    /**
     * Constructor method for shippingV3Response.
     *
     * @uses ShippingV3Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultExpeditionValue $return
     */
    public function __construct(?ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultExpeditionValue
     */
    public function getReturn(): ?ResultExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultExpeditionValue $return
     *
     * @return \Chronopost\StructType\ShippingV3Response
     */
    public function setReturn(?ResultExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
