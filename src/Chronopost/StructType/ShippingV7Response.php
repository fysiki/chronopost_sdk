<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response.
 */
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingV7Response.
     *
     * @uses ShippingV7Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     */
    public function __construct(?ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultMonoParcelExpeditionValue
     */
    public function getReturn(): ?ResultMonoParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     *
     * @return \Chronopost\StructType\ShippingV7Response
     */
    public function setReturn(?ResultMonoParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
