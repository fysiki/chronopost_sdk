<?php

declare(strict_types=1);

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var Error|null
     */
    protected ?Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ShippingInfo|null
     */
    protected ?ShippingInfo $shippingInfo = null;

    /**
     * Constructor method for resultShippingInfo
     * @param Error $error
     * @param ShippingInfo $shippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     */
    public function __construct(?Error $error = null, ?ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }

    /**
     * Get error value
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * Set error value
     * @param Error $error
     * @return ResultShippingInfo
     */
    public function setError(?Error $error = null): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get shippingInfo value
     * @return ShippingInfo|null
     */
    public function getShippingInfo(): ?ShippingInfo
    {
        return $this->shippingInfo;
    }

    /**
     * Set shippingInfo value
     * @param ShippingInfo $shippingInfo
     * @return ResultShippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }
}
