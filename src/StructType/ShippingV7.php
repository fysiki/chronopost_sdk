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
     * @var EsdValue|null
     */
    protected ?EsdValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var HeaderValue|null
     */
    protected ?HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ShipperValue|null
     */
    protected ?ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var CustomerValue|null
     */
    protected ?CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var RecipientValue|null
     */
    protected ?RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var RefValue|null
     */
    protected ?RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var SkybillWithDimensionsValueV3|null
     */
    protected ?SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var SkybillParamsValueV2|null
     */
    protected ?SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var CustomsValue|null
     */
    protected ?CustomsValue $customsValue = null;
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
     * @var ScheduledValue|null
     */
    protected ?ScheduledValue $scheduledValue = null;

    /**
     * Constructor method for shippingV7
     * @param EsdValue $esdValue
     * @param HeaderValue $headerValue
     * @param ShipperValue $shipperValue
     * @param CustomerValue $customerValue
     * @param RecipientValue $recipientValue
     * @param RefValue $refValue
     * @param SkybillWithDimensionsValueV3 $skybillValue
     * @param SkybillParamsValueV2 $skybillParamsValue
     * @param CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param ScheduledValue $scheduledValue
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
            ->setScheduledValue($scheduledValue);
    }

    /**
     * Get esdValue value
     * @return EsdValue|null
     */
    public function getEsdValue(): ?EsdValue
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value
     * @param EsdValue $esdValue
     * @return ShippingV7
     */
    public function setEsdValue(?EsdValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;

        return $this;
    }

    /**
     * Get headerValue value
     * @return HeaderValue|null
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value
     * @param HeaderValue $headerValue
     * @return ShippingV7
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    /**
     * Get shipperValue value
     * @return ShipperValue|null
     */
    public function getShipperValue(): ?ShipperValue
    {
        return $this->shipperValue;
    }

    /**
     * Set shipperValue value
     * @param ShipperValue $shipperValue
     * @return ShippingV7
     */
    public function setShipperValue(?ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;

        return $this;
    }

    /**
     * Get customerValue value
     * @return CustomerValue|null
     */
    public function getCustomerValue(): ?CustomerValue
    {
        return $this->customerValue;
    }

    /**
     * Set customerValue value
     * @param CustomerValue $customerValue
     * @return ShippingV7
     */
    public function setCustomerValue(?CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;

        return $this;
    }

    /**
     * Get recipientValue value
     * @return RecipientValue|null
     */
    public function getRecipientValue(): ?RecipientValue
    {
        return $this->recipientValue;
    }

    /**
     * Set recipientValue value
     * @param RecipientValue $recipientValue
     * @return ShippingV7
     */
    public function setRecipientValue(?RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Get refValue value
     * @return RefValue|null
     */
    public function getRefValue(): ?RefValue
    {
        return $this->refValue;
    }

    /**
     * Set refValue value
     * @param RefValue $refValue
     * @return ShippingV7
     */
    public function setRefValue(?RefValue $refValue = null): self
    {
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Get skybillValue value
     * @return SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue(): ?SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }

    /**
     * Set skybillValue value
     * @param SkybillWithDimensionsValueV3 $skybillValue
     * @return ShippingV7
     */
    public function setSkybillValue(?SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Get skybillParamsValue value
     * @return SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value
     * @param SkybillParamsValueV2 $skybillParamsValue
     * @return ShippingV7
     */
    public function setSkybillParamsValue(?SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;

        return $this;
    }

    /**
     * Get customsValue value
     * @return CustomsValue|null
     */
    public function getCustomsValue(): ?CustomsValue
    {
        return $this->customsValue;
    }

    /**
     * Set customsValue value
     * @param CustomsValue $customsValue
     * @return ShippingV7
     */
    public function setCustomsValue(?CustomsValue $customsValue = null): self
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
     * @return ShippingV7
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
     * @return ShippingV7
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
     * @return ShippingV7
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
     * @return ScheduledValue|null
     */
    public function getScheduledValue(): ?ScheduledValue
    {
        return $this->scheduledValue;
    }

    /**
     * Set scheduledValue value
     * @param ScheduledValue $scheduledValue
     * @return ShippingV7
     */
    public function setScheduledValue(?ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;

        return $this;
    }
}
