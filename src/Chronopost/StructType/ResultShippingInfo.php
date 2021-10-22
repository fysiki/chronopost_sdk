<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType.
 */
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ShippingInfo $shippingInfo = null;

    /**
     * Constructor method for resultShippingInfo.
     *
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     *
     * @param \Chronopost\StructType\Error        $error
     * @param \Chronopost\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?Error $error = null, ?ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo)
        ;
    }

    /**
     * Get error value.
     *
     * @return null|\Chronopost\StructType\Error
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * Set error value.
     *
     * @param \Chronopost\StructType\Error $error
     *
     * @return \Chronopost\StructType\ResultShippingInfo
     */
    public function setError(?Error $error = null): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get shippingInfo value.
     *
     * @return null|\Chronopost\StructType\ShippingInfo
     */
    public function getShippingInfo(): ?ShippingInfo
    {
        return $this->shippingInfo;
    }

    /**
     * Set shippingInfo value.
     *
     * @param \Chronopost\StructType\ShippingInfo $shippingInfo
     *
     * @return \Chronopost\StructType\ResultShippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }
}
