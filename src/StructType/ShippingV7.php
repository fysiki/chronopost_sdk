<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7
 * @subpackage Structs
 */
class ShippingV7 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EsdValue|null
     */
    protected ?\StructType\EsdValue $esdValue = null;
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
     * @var \StructType\SkybillWithDimensionsValueV3|null
     */
    protected ?\StructType\SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SkybillParamsValueV2|null
     */
    protected ?\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CustomsValue|null
     */
    protected ?\StructType\CustomsValue $customsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
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
     * Constructor method for shippingV7
     * @uses ShippingV7::setEsdValue()
     * @uses ShippingV7::setHeaderValue()
     * @uses ShippingV7::setShipperValue()
     * @uses ShippingV7::setCustomerValue()
     * @uses ShippingV7::setRecipientValue()
     * @uses ShippingV7::setRefValue()
     * @uses ShippingV7::setSkybillValue()
     * @uses ShippingV7::setSkybillParamsValue()
     * @uses ShippingV7::setCustomsValue()
     * @uses ShippingV7::setPassword()
     * @uses ShippingV7::setModeRetour()
     * @uses ShippingV7::setVersion()
     * @uses ShippingV7::setScheduledValue()
     * @param \StructType\EsdValue $esdValue
     * @param \StructType\HeaderValue $headerValue
     * @param \StructType\ShipperValue $shipperValue
     * @param \StructType\CustomerValue $customerValue
     * @param \StructType\RecipientValue $recipientValue
     * @param \StructType\RefValue $refValue
     * @param \StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param \StructType\CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param \StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\StructType\EsdValue $esdValue = null, ?\StructType\HeaderValue $headerValue = null, ?\StructType\ShipperValue $shipperValue = null, ?\StructType\CustomerValue $customerValue = null, ?\StructType\RecipientValue $recipientValue = null, ?\StructType\RefValue $refValue = null, ?\StructType\SkybillWithDimensionsValueV3 $skybillValue = null, ?\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?\StructType\CustomsValue $customsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?\StructType\ScheduledValue $scheduledValue = null)
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
            ->setCustomsValue($customsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \StructType\EsdValue|null
     */
    public function getEsdValue(): ?\StructType\EsdValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \StructType\EsdValue $esdValue
     * @return \StructType\ShippingV7
     */
    public function setEsdValue(?\StructType\EsdValue $esdValue = null): self
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
     * @return \StructType\ShippingV7
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
     * @return \StructType\ShippingV7
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
     * @return \StructType\ShippingV7
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
     * @return \StructType\ShippingV7
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
     * @return \StructType\ShippingV7
     */
    public function setRefValue(?\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \StructType\SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue(): ?\StructType\SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @return \StructType\ShippingV7
     */
    public function setSkybillValue(?\StructType\SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \StructType\ShippingV7
     */
    public function setSkybillParamsValue(?\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \StructType\CustomsValue|null
     */
    public function getCustomsValue(): ?\StructType\CustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param \StructType\CustomsValue $customsValue
     * @return \StructType\ShippingV7
     */
    public function setCustomsValue(?\StructType\CustomsValue $customsValue = null): self
    {
        $this->customsValue = $customsValue;
        
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
     * @return \StructType\ShippingV7
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
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \StructType\ShippingV7
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
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
     * @return \StructType\ShippingV7
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
     * @return \StructType\ShippingV7
     */
    public function setScheduledValue(?\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
