<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelResponse
 * @subpackage Structs
 */
class ShippingMultiParcelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultMultiParcelExpeditionValue|null
     */
    protected ?ResultMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelResponse
     * @param ResultMultiParcelExpeditionValue $return
     * @uses ShippingMultiParcelResponse::setReturn()
     */
    public function __construct(?ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultMultiParcelExpeditionValue $return
     * @return ShippingMultiParcelResponse
     */
    public function setReturn(?ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
