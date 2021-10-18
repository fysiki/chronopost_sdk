<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6
 * @subpackage Structs
 */
class ShippingV6 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EsdValue3|null
     */
    protected ?\StructType\EsdValue3 $esdValue = null;
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
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CustomerValue|null
     */
    protected ?\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RecipientValue|null
     */
    protected ?\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RefValue|null
     */
    protected ?\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SkybillValueV2|null
     */
    protected ?\StructType\SkybillValueV2 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SkybillParamsValue|null
     */
    protected ?\StructType\SkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ScheduledValue|null
     */
    protected ?\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingV6
     * @uses ShippingV6::setEsdValue()
     * @uses ShippingV6::setHeaderValue()
     * @uses ShippingV6::setShipperValue()
     * @uses ShippingV6::setCustomerValue()
     * @uses ShippingV6::setRecipientValue()
     * @uses ShippingV6::setRefValue()
     * @uses ShippingV6::setSkybillValue()
     * @uses ShippingV6::setSkybillParamsValue()
     * @uses ShippingV6::setPassword()
     * @uses ShippingV6::setVersion()
     * @uses ShippingV6::setScheduledValue()
     * @param \StructType\EsdValue3 $esdValue
     * @param \StructType\HeaderValue $headerValue
     * @param \StructType\ShipperValue $shipperValue
     * @param \StructType\CustomerValue $customerValue
     * @param \StructType\RecipientValue $recipientValue
     * @param \StructType\RefValue $refValue
     * @param \StructType\SkybillValueV2 $skybillValue
     * @param \StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @param \StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\StructType\EsdValue3 $esdValue = null, ?\StructType\HeaderValue $headerValue = null, ?\StructType\ShipperValue $shipperValue = null, ?\StructType\CustomerValue $customerValue = null, ?\StructType\RecipientValue $recipientValue = null, ?\StructType\RefValue $refValue = null, ?\StructType\SkybillValueV2 $skybillValue = null, ?\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?\StructType\ScheduledValue $scheduledValue = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \StructType\EsdValue3 $esdValue
     * @return \StructType\ShippingV6
     */
    public function setEsdValue(?\StructType\EsdValue3 $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
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
     * @return \StructType\ShippingV6
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
     * @return \StructType\ShippingV6
     */
    public function setShipperValue(?\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \StructType\CustomerValue $customerValue
     * @return \StructType\ShippingV6
     */
    public function setCustomerValue(?\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
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
     * @return \StructType\ShippingV6
     */
    public function setRecipientValue(?\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \StructType\RefValue|null
     */
    public function getRefValue(): ?\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \StructType\RefValue $refValue
     * @return \StructType\ShippingV6
     */
    public function setRefValue(?\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \StructType\SkybillValueV2|null
     */
    public function getSkybillValue(): ?\StructType\SkybillValueV2
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \StructType\SkybillValueV2 $skybillValue
     * @return \StructType\ShippingV6
     */
    public function setSkybillValue(?\StructType\SkybillValueV2 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\StructType\SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \StructType\SkybillParamsValue $skybillParamsValue
     * @return \StructType\ShippingV6
     */
    public function setSkybillParamsValue(?\StructType\SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
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
     * @return \StructType\ShippingV6
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
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\ShippingV6
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \StructType\ScheduledValue $scheduledValue
     * @return \StructType\ShippingV6
     */
    public function setScheduledValue(?\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
