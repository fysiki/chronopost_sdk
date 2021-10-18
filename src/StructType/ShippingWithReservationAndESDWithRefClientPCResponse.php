<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\ResultReservationExpeditionValue|null
     */
    protected ?\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientPCResponse
     * @uses ShippingWithReservationAndESDWithRefClientPCResponse::setReturn()
     * @param \StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultReservationExpeditionValue $return
     * @return \StructType\ShippingWithReservationAndESDWithRefClientPCResponse
     */
    public function setReturn(?\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
