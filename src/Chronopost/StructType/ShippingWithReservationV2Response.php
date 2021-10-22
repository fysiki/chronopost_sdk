<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response.
 */
class ShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null;

    /**
     * Constructor method for shippingWithReservationV2Response.
     *
     * @uses ShippingWithReservationV2Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     */
    public function __construct(?ResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultReservationExpeditionValueV2
     */
    public function getReturn(): ?ResultReservationExpeditionValueV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     *
     * @return \Chronopost\StructType\ShippingWithReservationV2Response
     */
    public function setReturn(?ResultReservationExpeditionValueV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
