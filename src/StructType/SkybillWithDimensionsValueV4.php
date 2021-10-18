<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;

/**
 * This class stands for skybillWithDimensionsValueV4 StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValueV4 extends SkybillWithDimensionsValueV3
{
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for skybillWithDimensionsValueV4
     * @param string $skybillNumber
     * @uses SkybillWithDimensionsValueV4::setSkybillNumber()
     */
    public function __construct(?string $skybillNumber = null)
    {
        $this
            ->setSkybillNumber($skybillNumber);
    }

    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return SkybillWithDimensionsValueV4
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;

        return $this;
    }
}
