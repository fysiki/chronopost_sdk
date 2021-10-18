<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2Response
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationMultiParcelExpeditionValueV2|null
     */
    protected ?ResultReservationMultiParcelExpeditionValueV2 $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationV2Response
     * @param ResultReservationMultiParcelExpeditionValueV2 $return
     * @uses ShippingMultiParcelWithReservationV2Response::setReturn()
     */
    public function __construct(?ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultReservationMultiParcelExpeditionValueV2|null
     */
    public function getReturn(): ?ResultReservationMultiParcelExpeditionValueV2
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultReservationMultiParcelExpeditionValueV2 $return
     * @return ShippingMultiParcelWithReservationV2Response
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValueV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
