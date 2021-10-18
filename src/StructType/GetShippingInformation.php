<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformation
 * @subpackage Structs
 */
class GetShippingInformation extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HeaderValue|null
     */
    protected ?\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ShipperValue|null
     */
    protected ?\StructType\ShipperValue $shipperValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RecipientValue|null
     */
    protected ?\StructType\RecipientValue $recipientValue = null;
    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SkybillValueBase|null
     */
    protected ?\StructType\SkybillValueBase $skybillValueBase = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for getShippingInformation
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     * @param \StructType\HeaderValue $headerValue
     * @param \StructType\ShipperValue $shipperValue
     * @param \StructType\RecipientValue $recipientValue
     * @param \StructType\SkybillValueBase $skybillValueBase
     * @param string $password
     */
    public function __construct(?\StructType\HeaderValue $headerValue = null, ?\StructType\ShipperValue $shipperValue = null, ?\StructType\RecipientValue $recipientValue = null, ?\StructType\SkybillValueBase $skybillValueBase = null, ?string $password = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setRecipientValue($recipientValue)
            ->setSkybillValueBase($skybillValueBase)
            ->setPassword($password);
    }
    /**
     * Get headerValue value
     * @return \StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \StructType\HeaderValue $headerValue
     * @return \StructType\GetShippingInformation
     */
    public function setHeaderValue(?\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \StructType\ShipperValue $shipperValue
     * @return \StructType\GetShippingInformation
     */
    public function setShipperValue(?\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \StructType\RecipientValue $recipientValue
     * @return \StructType\GetShippingInformation
     */
    public function setRecipientValue(?\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get skybillValueBase value
     * @return \StructType\SkybillValueBase|null
     */
    public function getSkybillValueBase(): ?\StructType\SkybillValueBase
    {
        return $this->skybillValueBase;
    }
    /**
     * Set skybillValueBase value
     * @param \StructType\SkybillValueBase $skybillValueBase
     * @return \StructType\GetShippingInformation
     */
    public function setSkybillValueBase(?\StructType\SkybillValueBase $skybillValueBase = null): self
    {
        $this->skybillValueBase = $skybillValueBase;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\GetShippingInformation
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
