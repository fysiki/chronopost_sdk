<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientPCResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientPCResponse
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClientPCResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationExpeditionValue|null
     */
    protected ?ResultReservationExpeditionValue $return = null;

    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientPCResponse
     * @param ResultReservationExpeditionValue $return
     * @uses ShippingWithReservationAndESDWithRefClientPCResponse::setReturn()
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
     * @return ShippingWithReservationAndESDWithRefClientPCResponse
     */
    public function setReturn(?ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
