<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV2
 * @subpackage Structs
 */
class ShippingV2 extends AbstractStructBase
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
     * @var SkybillValue|null
     */
    protected ?SkybillValue $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var SkybillParamsValue|null
     */
    protected ?SkybillParamsValue $skybillParamsValue = null;
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
     * Constructor method for shippingV2
     * @param EsdValue $esdValue
     * @param HeaderValue $headerValue
     * @param ShipperValue $shipperValue
     * @param CustomerValue $customerValue
     * @param RecipientValue $recipientValue
     * @param RefValue $refValue
     * @param SkybillValue $skybillValue
     * @param SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @uses ShippingV2::setEsdValue()
     * @uses ShippingV2::setHeaderValue()
     * @uses ShippingV2::setShipperValue()
     * @uses ShippingV2::setCustomerValue()
     * @uses ShippingV2::setRecipientValue()
     * @uses ShippingV2::setRefValue()
     * @uses ShippingV2::setSkybillValue()
     * @uses ShippingV2::setSkybillParamsValue()
     * @uses ShippingV2::setPassword()
     * @uses ShippingV2::setVersion()
     */
    public function __construct(?EsdValue $esdValue = null, ?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?CustomerValue $customerValue = null, ?RecipientValue $recipientValue = null, ?RefValue $refValue = null, ?SkybillValue $skybillValue = null, ?SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null)
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
            ->setVersion($version);
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
     * @return ShippingV2
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
     * @return ShippingV2
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
     * @return ShippingV2
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
     * @return ShippingV2
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
     * @return ShippingV2
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
     * @return ShippingV2
     */
    public function setRefValue(?RefValue $refValue = null): self
    {
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Get skybillValue value
     * @return SkybillValue|null
     */
    public function getSkybillValue(): ?SkybillValue
    {
        return $this->skybillValue;
    }

    /**
     * Set skybillValue value
     * @param SkybillValue $skybillValue
     * @return ShippingV2
     */
    public function setSkybillValue(?SkybillValue $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Get skybillParamsValue value
     * @return SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value
     * @param SkybillParamsValue $skybillParamsValue
     * @return ShippingV2
     */
    public function setSkybillParamsValue(?SkybillParamsValue $skybillParamsValue = null): self
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
     * @return ShippingV2
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
     * @return ShippingV2
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
