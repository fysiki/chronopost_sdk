<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for entry StructType.
 */
class Entry extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $key = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $value = null;

    /**
     * Constructor method for entry.
     *
     * @uses Entry::setKey()
     * @uses Entry::setValue()
     *
     * @param string $key
     * @param string $value
     */
    public function __construct(?string $key = null, ?string $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value)
        ;
    }

    /**
     * Get key value.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Set key value.
     *
     * @param string $key
     *
     * @return \Chronopost\StructType\Entry
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;

        return $this;
    }

    /**
     * Get value value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value value.
     *
     * @param string $value
     *
     * @return \Chronopost\StructType\Entry
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}