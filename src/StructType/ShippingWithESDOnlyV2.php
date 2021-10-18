<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyV2
 * @subpackage Structs
 */
class ShippingWithESDOnlyV2 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EsdWithRefClientValueV2|null
     */
    protected ?\StructType\EsdWithRefClientValueV2 $esdValue = null;
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
     * @var \StructType\SkybillValue|null
     */
    protected ?\StructType\SkybillValue $skybillValue = null;
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
     * Constructor method for shippingWithESDOnlyV2
     * @uses ShippingWithESDOnlyV2::setEsdValue()
     * @uses ShippingWithESDOnlyV2::setHeaderValue()
     * @uses ShippingWithESDOnlyV2::setShipperValue()
     * @uses ShippingWithESDOnlyV2::setCustomerValue()
     * @uses ShippingWithESDOnlyV2::setRecipientValue()
     * @uses ShippingWithESDOnlyV2::setRefValue()
     * @uses ShippingWithESDOnlyV2::setSkybillValue()
     * @uses ShippingWithESDOnlyV2::setSkybillParamsValue()
     * @uses ShippingWithESDOnlyV2::setPassword()
     * @uses ShippingWithESDOnlyV2::setModeRetour()
     * @uses ShippingWithESDOnlyV2::setVersion()
     * @param \StructType\EsdWithRefClientValueV2 $esdValue
     * @param \StructType\HeaderValue $headerValue
     * @param \StructType\ShipperValue $shipperValue
     * @param \StructType\CustomerValue $customerValue
     * @param \StructType\RecipientValue $recipientValue
     * @param \StructType\RefValue $refValue
     * @param \StructType\SkybillValue $skybillValue
     * @param \StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     */
    public function __construct(?\StructType\EsdWithRefClientValueV2 $esdValue = null, ?\StructType\HeaderValue $headerValue = null, ?\StructType\ShipperValue $shipperValue = null, ?\StructType\CustomerValue $customerValue = null, ?\StructType\RecipientValue $recipientValue = null, ?\StructType\RefValue $refValue = null, ?\StructType\SkybillValue $skybillValue = null, ?\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null)
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
            ->setModeRetour($modeRetour)
            ->setVersion($version);
    }
    /**
     * Get esdValue value
     * @return \StructType\EsdWithRefClientValueV2|null
     */
    public function getEsdValue(): ?\StructType\EsdWithRefClientValueV2
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \StructType\EsdWithRefClientValueV2 $esdValue
     * @return \StructType\ShippingWithESDOnlyV2
     */
    public function setEsdValue(?\StructType\EsdWithRefClientValueV2 $esdValue = null): self
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
     */
    public function setRefValue(?\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \StructType\SkybillValue|null
     */
    public function getSkybillValue(): ?\StructType\SkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \StructType\SkybillValue $skybillValue
     * @return \StructType\ShippingWithESDOnlyV2
     */
    public function setSkybillValue(?\StructType\SkybillValue $skybillValue = null): self
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
     * @return \StructType\ShippingWithESDOnlyV2
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
}
