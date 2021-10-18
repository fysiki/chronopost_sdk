<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyV2Response
 * @subpackage Structs
 */
class ShippingWithESDOnlyV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultReservationExpeditionValue|null
     */
    protected ?ResultReservationExpeditionValue $return = null;

    /**
     * Constructor method for shippingWithESDOnlyV2Response
     * @param ResultReservationExpeditionValue $return
     * @uses ShippingWithESDOnlyV2Response::setReturn()
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
     * @return ShippingWithESDOnlyV2Response
     */
    public function setReturn(?ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
