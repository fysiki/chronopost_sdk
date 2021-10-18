<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5Response
 * @subpackage Structs
 */
class ShippingV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultExpeditionValue|null
     */
    protected ?ResultExpeditionValue $return = null;

    /**
     * Constructor method for shippingV5Response
     * @param ResultExpeditionValue $return
     * @uses ShippingV5Response::setReturn()
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
     * @return ShippingV5Response
     */
    public function setReturn(?ResultExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
