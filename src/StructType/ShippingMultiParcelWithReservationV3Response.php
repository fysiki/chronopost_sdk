<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3Response
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationMultiParcelExpeditionValueV2|null
     */
    protected ?ResultReservationMultiParcelExpeditionValueV2 $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationV3Response
     * @param ResultReservationMultiParcelExpeditionValueV2 $return
     * @uses ShippingMultiParcelWithReservationV3Response::setReturn()
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
     * @return ShippingMultiParcelWithReservationV3Response
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValueV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
