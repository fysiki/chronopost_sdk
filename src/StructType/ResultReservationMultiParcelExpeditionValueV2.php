<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;

/**
 * This class stands for resultReservationMultiParcelExpeditionValueV2 StructType
 * @subpackage Structs
 */
class ResultReservationMultiParcelExpeditionValueV2 extends ResultReservationMultiParcelExpeditionValue
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $asCode = null;

    /**
     * Constructor method for resultReservationMultiParcelExpeditionValueV2
     * @param string $asCode
     * @uses ResultReservationMultiParcelExpeditionValueV2::setAsCode()
     */
    public function __construct(?string $asCode = null)
    {
        $this
            ->setAsCode($asCode);
    }

    /**
     * Get asCode value
     * @return string|null
     */
    public function getAsCode(): ?string
    {
        return $this->asCode;
    }

    /**
     * Set asCode value
     * @param string $asCode
     * @return ResultReservationMultiParcelExpeditionValueV2
     */
    public function setAsCode(?string $asCode = null): self
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;

        return $this;
    }
}
