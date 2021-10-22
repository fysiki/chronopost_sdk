<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5Response.
 */
class ShippingV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultExpeditionValue $return = null;

    /**
     * Constructor method for shippingV5Response.
     *
     * @uses ShippingV5Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingV5Response
     */
    public function setReturn(?ResultExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
