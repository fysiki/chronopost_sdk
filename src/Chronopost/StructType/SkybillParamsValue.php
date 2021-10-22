<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillParamsValue StructType.
 */
class SkybillParamsValue extends AbstractStructBase
{
    /**
     * The duplicata
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $duplicata = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $mode = null;

    /**
     * Constructor method for skybillParamsValue.
     *
     * @uses SkybillParamsValue::setDuplicata()
     * @uses SkybillParamsValue::setMode()
     *
     * @param string $duplicata
     * @param string $mode
     */
    public function __construct(?string $duplicata = null, ?string $mode = null)
    {
        $this
            ->setDuplicata($duplicata)
            ->setMode($mode)
        ;
    }

    /**
     * Get duplicata value.
     */
    public function getDuplicata(): ?string
    {
        return $this->duplicata;
    }

    /**
     * Set duplicata value.
     *
     * @param string $duplicata
     *
     * @return \Chronopost\StructType\SkybillParamsValue
     */
    public function setDuplicata(?string $duplicata = null): self
    {
        // validation for constraint: string
        if (!is_null($duplicata) && !is_string($duplicata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicata, true), gettype($duplicata)), __LINE__);
        }
        $this->duplicata = $duplicata;

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
     * @return \Chronopost\StructType\SkybillParamsValue
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
