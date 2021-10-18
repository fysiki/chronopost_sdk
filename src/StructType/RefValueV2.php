<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;

/**
 * This class stands for refValueV2 StructType.
 */
class RefValueV2 extends RefValue
{
    /**
     * The idRelais
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $idRelais = null;

    /**
     * Constructor method for refValueV2.
     *
     * @param string $idRelais
     *
     * @uses RefValueV2::setIdRelais()
     */
    public function __construct(?string $idRelais = null)
    {
        $this
            ->setIdRelais($idRelais)
        ;
    }

    /**
     * Get idRelais value.
     */
    public function getIdRelais(): ?string
    {
        return $this->idRelais;
    }

    /**
     * Set idRelais value.
     *
     * @param string $idRelais
     *
     * @return RefValueV2
     */
    public function setIdRelais(?string $idRelais = null): self
    {
        // validation for constraint: string
        if (!is_null($idRelais) && !is_string($idRelais)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idRelais, true), gettype($idRelais)), __LINE__);
        }
        $this->idRelais = $idRelais;

        return $this;
    }
}
