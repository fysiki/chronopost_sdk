<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingResponse
 * @subpackage Structs
 */
class ShippingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultExpeditionValue|null
     */
    protected ?ResultExpeditionValue $return = null;

    /**
     * Constructor method for shippingResponse
     * @param ResultExpeditionValue $return
     * @uses ShippingResponse::setReturn()
     */
    public function __construct(?ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultExpeditionValue|null
     */
    public function getReturn(): ?ResultExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultExpeditionValue $return
     * @return ShippingResponse
     */
    public function setReturn(?ResultExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
