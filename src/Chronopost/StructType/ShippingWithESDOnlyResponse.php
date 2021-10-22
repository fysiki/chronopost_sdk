<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyResponse.
 */
class ShippingWithESDOnlyResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultReservationExpeditionValue $return = null;

    /**
     * Constructor method for shippingWithESDOnlyResponse.
     *
     * @uses ShippingWithESDOnlyResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function getReturn(): ?ResultReservationExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultReservationExpeditionValue $return
     *
     * @return \Chronopost\StructType\ShippingWithESDOnlyResponse
     */
    public function setReturn(?ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
