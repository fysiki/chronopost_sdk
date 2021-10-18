<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndMode StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndMode.
 */
class GetReservedSkybillWithTypeAndMode extends AbstractStructBase
{
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $reservationNumber = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $mode = null;

    /**
     * Constructor method for getReservedSkybillWithTypeAndMode.
     *
     * @param string $reservationNumber
     * @param string $mode
     *
     * @uses GetReservedSkybillWithTypeAndMode::setReservationNumber()
     * @uses GetReservedSkybillWithTypeAndMode::setMode()
     */
    public function __construct(?string $reservationNumber = null, ?string $mode = null)
    {
        $this
            ->setReservationNumber($reservationNumber)
            ->setMode($mode)
        ;
    }

    /**
     * Get reservationNumber value.
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }

    /**
     * Set reservationNumber value.
     *
     * @param string $reservationNumber
     *
     * @return GetReservedSkybillWithTypeAndMode
     */
    public function setReservationNumber(?string $reservationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * Get mode value.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Set mode value.
     *
     * @param string $mode
     *
     * @return GetReservedSkybillWithTypeAndMode
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;

        return $this;
    }
}
