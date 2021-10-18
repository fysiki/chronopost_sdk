<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClient StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClient
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClient extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var EsdWithRefClientValue|null
     */
    protected ?EsdWithRefClientValue $esdValue = null;
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
     * Constructor method for shippingWithReservationAndESDWithRefClient
     * @param EsdWithRefClientValue $esdValue
     * @param HeaderValue $headerValue
     * @param ShipperValue $shipperValue
     * @param CustomerValue $customerValue
     * @param RecipientValue $recipientValue
     * @param RefValue $refValue
     * @param SkybillValue $skybillValue
     * @param SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param ScheduledValue $scheduledValue
     * @uses ShippingWithReservationAndESDWithRefClient::setEsdValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setHeaderValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setShipperValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setCustomerValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setRecipientValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setRefValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setSkybillValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setSkybillParamsValue()
     * @uses ShippingWithReservationAndESDWithRefClient::setPassword()
     * @uses ShippingWithReservationAndESDWithRefClient::setModeRetour()
     * @uses ShippingWithReservationAndESDWithRefClient::setVersion()
     * @uses ShippingWithReservationAndESDWithRefClient::setScheduledValue()
     */
    public function __construct(?EsdWithRefClientValue $esdValue = null, ?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?CustomerValue $customerValue = null, ?RecipientValue $recipientValue = null, ?RefValue $refValue = null, ?SkybillValue $skybillValue = null, ?SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?ScheduledValue $scheduledValue = null)
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
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }

    /**
     * Get esdValue value
     * @return EsdWithRefClientValue|null
     */
    public function getEsdValue(): ?EsdWithRefClientValue
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value
     * @param EsdWithRefClientValue $esdValue
     * @return ShippingWithReservationAndESDWithRefClient
     */
    public function setEsdValue(?EsdWithRefClientValue $esdValue = null): self
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
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
     * @return ShippingWithReservationAndESDWithRefClient
     */
    public function setScheduledValue(?ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;

        return $this;
    }
}
