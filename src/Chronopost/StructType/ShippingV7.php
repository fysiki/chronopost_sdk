<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7.
 */
class ShippingV7 extends AbstractStructBase
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
    protected ?\Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\CustomsValue $customsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $modeRetour = null;
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
     * Constructor method for shippingV7.
     *
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
     *
     * @param \Chronopost\StructType\EsdValue                     $esdValue
     * @param \Chronopost\StructType\HeaderValue                  $headerValue
     * @param \Chronopost\StructType\ShipperValue                 $shipperValue
     * @param \Chronopost\StructType\CustomerValue                $customerValue
     * @param \Chronopost\StructType\RecipientValue               $recipientValue
     * @param \Chronopost\StructType\RefValue                     $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValueV2         $skybillParamsValue
     * @param \Chronopost\StructType\CustomsValue                 $customsValue
     * @param string                                              $password
     * @param string                                              $modeRetour
     * @param string                                              $version
     * @param \Chronopost\StructType\ScheduledValue               $scheduledValue
     */
    public function __construct(?EsdValue $esdValue = null, ?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?CustomerValue $customerValue = null, ?RecipientValue $recipientValue = null, ?RefValue $refValue = null, ?SkybillWithDimensionsValueV3 $skybillValue = null, ?SkybillParamsValueV2 $skybillParamsValue = null, ?CustomsValue $customsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?ScheduledValue $scheduledValue = null)
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setRefValue(?RefValue $refValue = null): self
    {
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Get skybillValue value.
     *
     * @return null|\Chronopost\StructType\SkybillWithDimensionsValueV3
     */
    public function getSkybillValue(): ?SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }

    /**
     * Set skybillValue value.
     *
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue
     *
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setSkybillValue(?SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Get skybillParamsValue value.
     *
     * @return null|\Chronopost\StructType\SkybillParamsValueV2
     */
    public function getSkybillParamsValue(): ?SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value.
     *
     * @param \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     *
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setSkybillParamsValue(?SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;

        return $this;
    }

    /**
     * Get customsValue value.
     *
     * @return null|\Chronopost\StructType\CustomsValue
     */
    public function getCustomsValue(): ?CustomsValue
    {
        return $this->customsValue;
    }

    /**
     * Set customsValue value.
     *
     * @param \Chronopost\StructType\CustomsValue $customsValue
     *
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setCustomsValue(?CustomsValue $customsValue = null): self
    {
        $this->customsValue = $customsValue;

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
     * @return \Chronopost\StructType\ShippingV7
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
     * Get modeRetour value.
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }

    /**
     * Set modeRetour value.
     *
     * @param string $modeRetour
     *
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setScheduledValue(?ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;

        return $this;
    }
}
