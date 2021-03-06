<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appointmentValue StructType.
 */
class AppointmentValue extends AbstractStructBase
{
    /**
     * The timeSlotEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $timeSlotEndDate = null;
    /**
     * The timeSlotStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $timeSlotStartDate = null;
    /**
     * The timeSlotTariffLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $timeSlotTariffLevel = null;

    /**
     * Constructor method for appointmentValue.
     *
     * @uses AppointmentValue::setTimeSlotEndDate()
     * @uses AppointmentValue::setTimeSlotStartDate()
     * @uses AppointmentValue::setTimeSlotTariffLevel()
     *
     * @param string $timeSlotEndDate
     * @param string $timeSlotStartDate
     * @param string $timeSlotTariffLevel
     */
    public function __construct(?string $timeSlotEndDate = null, ?string $timeSlotStartDate = null, ?string $timeSlotTariffLevel = null)
    {
        $this
            ->setTimeSlotEndDate($timeSlotEndDate)
            ->setTimeSlotStartDate($timeSlotStartDate)
            ->setTimeSlotTariffLevel($timeSlotTariffLevel)
        ;
    }

    /**
     * Get timeSlotEndDate value.
     */
    public function getTimeSlotEndDate(): ?string
    {
        return $this->timeSlotEndDate;
    }

    /**
     * Set timeSlotEndDate value.
     *
     * @param string $timeSlotEndDate
     *
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotEndDate(?string $timeSlotEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotEndDate) && !is_string($timeSlotEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotEndDate, true), gettype($timeSlotEndDate)), __LINE__);
        }
        $this->timeSlotEndDate = $timeSlotEndDate;

        return $this;
    }

    /**
     * Get timeSlotStartDate value.
     */
    public function getTimeSlotStartDate(): ?string
    {
        return $this->timeSlotStartDate;
    }

    /**
     * Set timeSlotStartDate value.
     *
     * @param string $timeSlotStartDate
     *
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotStartDate(?string $timeSlotStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotStartDate) && !is_string($timeSlotStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotStartDate, true), gettype($timeSlotStartDate)), __LINE__);
        }
        $this->timeSlotStartDate = $timeSlotStartDate;

        return $this;
    }

    /**
     * Get timeSlotTariffLevel value.
     */
    public function getTimeSlotTariffLevel(): ?string
    {
        return $this->timeSlotTariffLevel;
    }

    /**
     * Set timeSlotTariffLevel value.
     *
     * @param string $timeSlotTariffLevel
     *
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotTariffLevel(?string $timeSlotTariffLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotTariffLevel) && !is_string($timeSlotTariffLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotTariffLevel, true), gettype($timeSlotTariffLevel)), __LINE__);
        }
        $this->timeSlotTariffLevel = $timeSlotTariffLevel;

        return $this;
    }
}
