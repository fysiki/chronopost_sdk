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
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var RecipientValue|null
     */
    protected ?RecipientValue $recipientValue = null;
    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var SkybillValueBase|null
     */
    protected ?SkybillValueBase $skybillValueBase = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;

    /**
     * Constructor method for getShippingInformation
     * @param HeaderValue $headerValue
     * @param ShipperValue $shipperValue
     * @param RecipientValue $recipientValue
     * @param SkybillValueBase $skybillValueBase
     * @param string $password
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     */
    public function __construct(?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?RecipientValue $recipientValue = null, ?SkybillValueBase $skybillValueBase = null, ?string $password = null)
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
     * @return HeaderValue|null
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value
     * @param HeaderValue $headerValue
     * @return GetShippingInformation
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
     * @return GetShippingInformation
     */
    public function setShipperValue(?ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;

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
     * @return GetShippingInformation
     */
    public function setRecipientValue(?RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Get skybillValueBase value
     * @return SkybillValueBase|null
     */
    public function getSkybillValueBase(): ?SkybillValueBase
    {
        return $this->skybillValueBase;
    }

    /**
     * Set skybillValueBase value
     * @param SkybillValueBase $skybillValueBase
     * @return GetShippingInformation
     */
    public function setSkybillValueBase(?SkybillValueBase $skybillValueBase = null): self
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
     * @return GetShippingInformation
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
