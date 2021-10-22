<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3Response.
 */
class ShippingMultiParcelWithReservationV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationV3Response.
     *
     * @uses ShippingMultiParcelWithReservationV3Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     */
    public function __construct(?ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2
     */
    public function getReturn(): ?ResultReservationMultiParcelExpeditionValueV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     *
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3Response
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValueV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
