<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV2
 * @subpackage Structs
 */
class ShippingMultiParcelV2 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var EsdValue3|null
     */
    protected ?EsdValue3 $esdValue = null;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var ShipperValueV2[]
     */
    protected ?array $shipperValue = null;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var SkybillWithDimensionsValueV4[]
     */
    protected ?array $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var SkybillParamsValueV2|null
     */
    protected ?SkybillParamsValueV2 $skybillParamsValue = null;
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
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var ScheduledValue[]
     */
    protected ?array $scheduledValue = null;
    /**
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var RecipientLocalValue[]
     */
    protected ?array $recipientLocalValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var CustomsValue[]
     */
    protected ?array $customsValue = null;

    /**
     * Constructor method for shippingMultiParcelV2
     * @param EsdValue3 $esdValue
     * @param HeaderValue $headerValue
     * @param ShipperValueV2[] $shipperValue
     * @param CustomerValue $customerValue
     * @param RecipientValue[] $recipientValue
     * @param RefValue[] $refValue
     * @param SkybillWithDimensionsValueV4[] $skybillValue
     * @param SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param ScheduledValue[] $scheduledValue
     * @param RecipientLocalValue[] $recipientLocalValue
     * @param CustomsValue[] $customsValue
     * @uses ShippingMultiParcelV2::setEsdValue()
     * @uses ShippingMultiParcelV2::setHeaderValue()
     * @uses ShippingMultiParcelV2::setShipperValue()
     * @uses ShippingMultiParcelV2::setCustomerValue()
     * @uses ShippingMultiParcelV2::setRecipientValue()
     * @uses ShippingMultiParcelV2::setRefValue()
     * @uses ShippingMultiParcelV2::setSkybillValue()
     * @uses ShippingMultiParcelV2::setSkybillParamsValue()
     * @uses ShippingMultiParcelV2::setPassword()
     * @uses ShippingMultiParcelV2::setModeRetour()
     * @uses ShippingMultiParcelV2::setNumberOfParcel()
     * @uses ShippingMultiParcelV2::setVersion()
     * @uses ShippingMultiParcelV2::setMultiParcel()
     * @uses ShippingMultiParcelV2::setScheduledValue()
     * @uses ShippingMultiParcelV2::setRecipientLocalValue()
     * @uses ShippingMultiParcelV2::setCustomsValue()
     */
    public function __construct(?EsdValue3 $esdValue = null, ?HeaderValue $headerValue = null, ?array $shipperValue = null, ?CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue)
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue);
    }

    /**
     * Get esdValue value
     * @return EsdValue3|null
     */
    public function getEsdValue(): ?EsdValue3
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value
     * @param EsdValue3 $esdValue
     * @return ShippingMultiParcelV2
     */
    public function setEsdValue(?EsdValue3 $esdValue = null): self
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
     * @return ShippingMultiParcelV2
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    /**
     * Get shipperValue value
     * @return ShipperValueV2[]
     */
    public function getShipperValue(): ?array
    {
        return $this->shipperValue;
    }

    /**
     * This method is responsible for validating the values passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintsFromSetShipperValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ShipperValueItem instanceof ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV2ShipperValueItem) ? get_class($shippingMultiParcelV2ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ShipperValueItem), var_export($shippingMultiParcelV2ShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set shipperValue value
     * @param ShipperValueV2[] $shipperValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setShipperValue(?array $shipperValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintsFromSetShipperValue($shipperValue))) {
            throw new InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;

        return $this;
    }

    /**
     * Add item to shipperValue value
     * @param ShipperValueV2 $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToShipperValue(ShipperValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ShipperValueV2) {
            throw new InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;

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
     * @return ShippingMultiParcelV2
     */
    public function setCustomerValue(?CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;

        return $this;
    }

    /**
     * Get recipientValue value
     * @return RecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }

    /**
     * This method is responsible for validating the values passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintsFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientValueItem instanceof RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientValueItem) ? get_class($shippingMultiParcelV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientValueItem), var_export($shippingMultiParcelV2RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set recipientValue value
     * @param RecipientValue[] $recipientValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintsFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Add item to recipientValue value
     * @param RecipientValue $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToRecipientValue(RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;

        return $this;
    }

    /**
     * Get refValue value
     * @return RefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }

    /**
     * This method is responsible for validating the values passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintsFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RefValueItem instanceof RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RefValueItem) ? get_class($shippingMultiParcelV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RefValueItem), var_export($shippingMultiParcelV2RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set refValue value
     * @param RefValue[] $refValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintsFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Add item to refValue value
     * @param RefValue $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToRefValue(RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;

        return $this;
    }

    /**
     * Get skybillValue value
     * @return SkybillWithDimensionsValueV4[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }

    /**
     * This method is responsible for validating the values passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintsFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2SkybillValueItem instanceof SkybillWithDimensionsValueV4) {
                $invalidValues[] = is_object($shippingMultiParcelV2SkybillValueItem) ? get_class($shippingMultiParcelV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2SkybillValueItem), var_export($shippingMultiParcelV2SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \StructType\SkybillWithDimensionsValueV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set skybillValue value
     * @param SkybillWithDimensionsValueV4[] $skybillValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintsFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Add item to skybillValue value
     * @param SkybillWithDimensionsValueV4 $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToSkybillValue(SkybillWithDimensionsValueV4 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SkybillWithDimensionsValueV4) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \StructType\SkybillWithDimensionsValueV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;

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
     * @return ShippingMultiParcelV2
     */
    public function setSkybillParamsValue(?SkybillParamsValueV2 $skybillParamsValue = null): self
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
     * @return ShippingMultiParcelV2
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
     * @return ShippingMultiParcelV2
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
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }

    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return ShippingMultiParcelV2
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;

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
     * @return ShippingMultiParcelV2
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
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }

    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return ShippingMultiParcelV2
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;

        return $this;
    }

    /**
     * Get scheduledValue value
     * @return ScheduledValue[]
     */
    public function getScheduledValue(): ?array
    {
        return $this->scheduledValue;
    }

    /**
     * This method is responsible for validating the values passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintsFromSetScheduledValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ScheduledValueItem instanceof ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2ScheduledValueItem) ? get_class($shippingMultiParcelV2ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ScheduledValueItem), var_export($shippingMultiParcelV2ScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set scheduledValue value
     * @param ScheduledValue[] $scheduledValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setScheduledValue(?array $scheduledValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintsFromSetScheduledValue($scheduledValue))) {
            throw new InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;

        return $this;
    }

    /**
     * Add item to scheduledValue value
     * @param ScheduledValue $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToScheduledValue(ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ScheduledValue) {
            throw new InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;

        return $this;
    }

    /**
     * Get recipientLocalValue value
     * @return RecipientLocalValue[]
     */
    public function getRecipientLocalValue(): ?array
    {
        return $this->recipientLocalValue;
    }

    /**
     * This method is responsible for validating the values passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientLocalValueItem instanceof RecipientLocalValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientLocalValueItem) ? get_class($shippingMultiParcelV2RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientLocalValueItem), var_export($shippingMultiParcelV2RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \StructType\RecipientLocalValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set recipientLocalValue value
     * @param RecipientLocalValue[] $recipientLocalValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setRecipientLocalValue(?array $recipientLocalValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;

        return $this;
    }

    /**
     * Add item to recipientLocalValue value
     * @param RecipientLocalValue $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToRecipientLocalValue(RecipientLocalValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RecipientLocalValue) {
            throw new InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \StructType\RecipientLocalValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;

        return $this;
    }

    /**
     * Get customsValue value
     * @return CustomsValue[]
     */
    public function getCustomsValue(): ?array
    {
        return $this->customsValue;
    }

    /**
     * This method is responsible for validating the values passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintsFromSetCustomsValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV2CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2CustomsValueItem instanceof CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2CustomsValueItem) ? get_class($shippingMultiParcelV2CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2CustomsValueItem), var_export($shippingMultiParcelV2CustomsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set customsValue value
     * @param CustomsValue[] $customsValue
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function setCustomsValue(?array $customsValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintsFromSetCustomsValue($customsValue))) {
            throw new InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;

        return $this;
    }

    /**
     * Add item to customsValue value
     * @param CustomsValue $item
     * @return ShippingMultiParcelV2
     * @throws InvalidArgumentException
     */
    public function addToCustomsValue(CustomsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CustomsValue) {
            throw new InvalidArgumentException(sprintf('The customsValue property can only contain items of type \StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;

        return $this;
    }
}
