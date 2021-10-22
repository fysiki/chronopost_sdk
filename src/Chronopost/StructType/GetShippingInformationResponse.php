<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse.
 */
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultShippingInfo $return = null;

    /**
     * Constructor method for getShippingInformationResponse.
     *
     * @uses GetShippingInformationResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultShippingInfo $return
     */
    public function __construct(?ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultShippingInfo
     */
    public function getReturn(): ?ResultShippingInfo
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultShippingInfo $return
     *
     * @return \Chronopost\StructType\GetShippingInformationResponse
     */
    public function setReturn(?ResultShippingInfo $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
