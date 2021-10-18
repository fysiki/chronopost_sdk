<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV4Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV4Response
 * @subpackage Structs
 */
class ShippingV4Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultExpeditionValue|null
     */
    protected ?ResultExpeditionValue $return = null;

    /**
     * Constructor method for shippingV4Response
     * @param ResultExpeditionValue $return
     * @uses ShippingV4Response::setReturn()
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
     * @return ShippingV4Response
     */
    public function setReturn(?ResultExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
