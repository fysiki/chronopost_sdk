<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientResponse
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClientResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationExpeditionValue|null
     */
    protected ?ResultReservationExpeditionValue $return = null;

    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientResponse
     * @param ResultReservationExpeditionValue $return
     * @uses ShippingWithReservationAndESDWithRefClientResponse::setReturn()
     */
    public function __construct(?ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?ResultReservationExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultReservationExpeditionValue $return
     * @return ShippingWithReservationAndESDWithRefClientResponse
     */
    public function setReturn(?ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
