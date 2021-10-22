<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;

/**
 * This class stands for skybillWithDimensionsValueV2 StructType.
 */
class SkybillWithDimensionsValueV2 extends SkybillWithDimensionsValue
{
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $as = null;

    /**
     * Constructor method for skybillWithDimensionsValueV2.
     *
     * @uses SkybillWithDimensionsValueV2::setAs()
     *
     * @param string $as
     */
    public function __construct(?string $as = null)
    {
        $this
            ->setAs($as)
        ;
    }

    /**
     * Get as value.
     */
    public function getAs(): ?string
    {
        return $this->as;
    }

    /**
     * Set as value.
     *
     * @param string $as
     *
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV2
     */
    public function setAs(?string $as = null): self
    {
        // validation for constraint: string
        if (!is_null($as) && !is_string($as)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as, true), gettype($as)), __LINE__);
        }
        $this->as = $as;

        return $this;
    }
}
