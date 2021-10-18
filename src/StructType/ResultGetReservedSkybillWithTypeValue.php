<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetReservedSkybillWithTypeValue StructType.
 */
class ResultGetReservedSkybillWithTypeValue extends AbstractStructBase
{
    /**
     * The errorCode.
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;
    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybill = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $type = null;

    /**
     * Constructor method for resultGetReservedSkybillWithTypeValue.
     *
     * @param int    $errorCode
     * @param string $errorMessage
     * @param string $skybill
     * @param string $type
     *
     * @uses ResultGetReservedSkybillWithTypeValue::setErrorCode()
     * @uses ResultGetReservedSkybillWithTypeValue::setErrorMessage()
     * @uses ResultGetReservedSkybillWithTypeValue::setSkybill()
     * @uses ResultGetReservedSkybillWithTypeValue::setType()
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?string $skybill = null, ?string $type = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setSkybill($skybill)
            ->setType($type)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     *
     * @param int $errorCode
     *
     * @return ResultGetReservedSkybillWithTypeValue
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     *
     * @param string $errorMessage
     *
     * @return ResultGetReservedSkybillWithTypeValue
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get skybill value.
     */
    public function getSkybill(): ?string
    {
        return $this->skybill;
    }

    /**
     * Set skybill value.
     *
     * @param string $skybill
     *
     * @return ResultGetReservedSkybillWithTypeValue
     */
    public function setSkybill(?string $skybill = null): self
    {
        // validation for constraint: string
        if (!is_null($skybill) && !is_string($skybill)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybill, true), gettype($skybill)), __LINE__);
        }
        $this->skybill = $skybill;

        return $this;
    }

    /**
     * Get type value.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type value.
     *
     * @param string $type
     *
     * @return ResultGetReservedSkybillWithTypeValue
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;

        return $this;
    }
}
