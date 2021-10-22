<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV3.
 */
class ShippingV3 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\EsdValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\SkybillValue $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $version = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ScheduledValue $scheduledValue = null;

    /**
     * Constructor method for shippingV3.
     *
     * @uses ShippingV3::setEsdValue()
     * @uses ShippingV3::setHeaderValue()
     * @uses ShippingV3::setShipperValue()
     * @uses ShippingV3::setCustomerValue()
     * @uses ShippingV3::setRecipientValue()
     * @uses ShippingV3::setRefValue()
     * @uses ShippingV3::setSkybillValue()
     * @uses ShippingV3::setSkybillParamsValue()
     * @uses ShippingV3::setPassword()
     * @uses ShippingV3::setVersion()
     * @uses ShippingV3::setScheduledValue()
     *
     * @param \Chronopost\StructType\EsdValue           $esdValue
     * @param \Chronopost\StructType\HeaderValue        $headerValue
     * @param \Chronopost\StructType\ShipperValue       $shipperValue
     * @param \Chronopost\StructType\CustomerValue      $customerValue
     * @param \Chronopost\StructType\RecipientValue     $recipientValue
     * @param \Chronopost\StructType\RefValue           $refValue
     * @param \Chronopost\StructType\SkybillValue       $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string                                    $password
     * @param string                                    $version
     * @param \Chronopost\StructType\ScheduledValue     $scheduledValue
     */
    public function __construct(?EsdValue $esdValue = null, ?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?CustomerValue $customerValue = null, ?RecipientValue $recipientValue = null, ?RefValue $refValue = null, ?SkybillValue $skybillValue = null, ?SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?ScheduledValue $scheduledValue = null)
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
            ->setScheduledValue($scheduledValue)
        ;
    }

    /**
     * Get esdValue value.
     *
     * @return null|\Chronopost\StructType\EsdValue
     */
    public function getEsdValue(): ?EsdValue
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value.
     *
     * @param \Chronopost\StructType\EsdValue $esdValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setEsdValue(?EsdValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;

        return $this;
    }

    /**
     * Get headerValue value.
     *
     * @return null|\Chronopost\StructType\HeaderValue
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value.
     *
     * @param \Chronopost\StructType\HeaderValue $headerValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    /**
     * Get shipperValue value.
     *
     * @return null|\Chronopost\StructType\ShipperValue
     */
    public function getShipperValue(): ?ShipperValue
    {
        return $this->shipperValue;
    }

    /**
     * Set shipperValue value.
     *
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setShipperValue(?ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;

        return $this;
    }

    /**
     * Get customerValue value.
     *
     * @return null|\Chronopost\StructType\CustomerValue
     */
    public function getCustomerValue(): ?CustomerValue
    {
        return $this->customerValue;
    }

    /**
     * Set customerValue value.
     *
     * @param \Chronopost\StructType\CustomerValue $customerValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setCustomerValue(?CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;

        return $this;
    }

    /**
     * Get recipientValue value.
     *
     * @return null|\Chronopost\StructType\RecipientValue
     */
    public function getRecipientValue(): ?RecipientValue
    {
        return $this->recipientValue;
    }

    /**
     * Set recipientValue value.
     *
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setRecipientValue(?RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Get refValue value.
     *
     * @return null|\Chronopost\StructType\RefValue
     */
    public function getRefValue(): ?RefValue
    {
        return $this->refValue;
    }

    /**
     * Set refValue value.
     *
     * @param \Chronopost\StructType\RefValue $refValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setRefValue(?RefValue $refValue = null): self
    {
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Get skybillValue value.
     *
     * @return null|\Chronopost\StructType\SkybillValue
     */
    public function getSkybillValue(): ?SkybillValue
    {
        return $this->skybillValue;
    }

    /**
     * Set skybillValue value.
     *
     * @param \Chronopost\StructType\SkybillValue $skybillValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setSkybillValue(?SkybillValue $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Get skybillParamsValue value.
     *
     * @return null|\Chronopost\StructType\SkybillParamsValue
     */
    public function getSkybillParamsValue(): ?SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value.
     *
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setSkybillParamsValue(?SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     *
     * @param string $password
     *
     * @return \Chronopost\StructType\ShippingV3
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
     * Get version value.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value.
     *
     * @param string $version
     *
     * @return \Chronopost\StructType\ShippingV3
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
     * Get scheduledValue value.
     *
     * @return null|\Chronopost\StructType\ScheduledValue
     */
    public function getScheduledValue(): ?ScheduledValue
    {
        return $this->scheduledValue;
    }

    /**
     * Set scheduledValue value.
     *
     * @param \Chronopost\StructType\ScheduledValue $scheduledValue
     *
     * @return \Chronopost\StructType\ShippingV3
     */
    public function setScheduledValue(?ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;

        return $this;
    }
}
