<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationResponse
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationMultiParcelExpeditionValue|null
     */
    protected ?ResultReservationMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationResponse
     * @param ResultReservationMultiParcelExpeditionValue $return
     * @uses ShippingMultiParcelWithReservationResponse::setReturn()
     */
    public function __construct(?ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultReservationMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?ResultReservationMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultReservationMultiParcelExpeditionValue $return
     * @return ShippingMultiParcelWithReservationResponse
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
