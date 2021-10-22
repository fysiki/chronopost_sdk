<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;

/**
 * This class stands for skybillParamsValueV2 StructType.
 */
class SkybillParamsValueV2 extends SkybillParamsValue
{
    /**
     * The withReservation.
     */
    protected ?int $withReservation = null;

    /**
     * Constructor method for skybillParamsValueV2.
     *
     * @uses SkybillParamsValueV2::setWithReservation()
     *
     * @param int $withReservation
     */
    public function __construct(?int $withReservation = null)
    {
        $this
            ->setWithReservation($withReservation)
        ;
    }

    /**
     * Get withReservation value.
     */
    public function getWithReservation(): ?int
    {
        return $this->withReservation;
    }

    /**
     * Set withReservation value.
     *
     * @param int $withReservation
     *
     * @return \Chronopost\StructType\SkybillParamsValueV2
     */
    public function setWithReservation(?int $withReservation = null): self
    {
        // validation for constraint: int
        if (!is_null($withReservation) && !(is_int($withReservation) || ctype_digit($withReservation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withReservation, true), gettype($withReservation)), __LINE__);
        }
        $this->withReservation = $withReservation;

        return $this;
    }
}
