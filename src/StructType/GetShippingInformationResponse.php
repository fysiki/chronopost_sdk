<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @subpackage Structs
 */
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ResultShippingInfo|null
     */
    protected ?ResultShippingInfo $return = null;

    /**
     * Constructor method for getShippingInformationResponse
     * @param ResultShippingInfo $return
     * @uses GetShippingInformationResponse::setReturn()
     */
    public function __construct(?ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * @return ResultShippingInfo|null
     */
    public function getReturn(): ?ResultShippingInfo
    {
        return $this->return;
    }

    /**
     * Set return value
     * @param ResultShippingInfo $return
     * @return GetShippingInformationResponse
     */
    public function setReturn(?ResultShippingInfo $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
