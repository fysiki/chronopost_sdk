<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationResponse.
 */
class ShippingMultiParcelWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationResponse.
     *
     * @uses ShippingMultiParcelWithReservationResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return
     */
    public function __construct(?ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
     */
    public function getReturn(): ?ResultReservationMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return
     *
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationResponse
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
