<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\Error|null
     */
    protected ?\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ShippingInfo|null
     */
    protected ?\StructType\ShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \StructType\Error $error
     * @param \StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?\StructType\Error $error = null, ?\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \StructType\Error|null
     */
    public function getError(): ?\StructType\Error
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \StructType\Error $error
     * @return \StructType\ResultShippingInfo
     */
    public function setError(?\StructType\Error $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \StructType\ShippingInfo|null
     */
    public function getShippingInfo(): ?\StructType\ShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \StructType\ShippingInfo $shippingInfo
     * @return \StructType\ResultShippingInfo
     */
    public function setShippingInfo(?\StructType\ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
