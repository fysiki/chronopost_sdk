<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultEnlevementNational StructType.
 */
class ResultEnlevementNational extends AbstractStructBase
{
    /**
     * The codeErreur.
     */
    protected ?int $codeErreur = null;
    /**
     * The infoEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\InfoEnlevement $infoEnlevement = null;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $libelleErreur = null;

    /**
     * Constructor method for resultEnlevementNational.
     *
     * @uses ResultEnlevementNational::setCodeErreur()
     * @uses ResultEnlevementNational::setInfoEnlevement()
     * @uses ResultEnlevementNational::setLibelleErreur()
     *
     * @param int                                   $codeErreur
     * @param \Chronopost\StructType\InfoEnlevement $infoEnlevement
     * @param string                                $libelleErreur
     */
    public function __construct(?int $codeErreur = null, ?InfoEnlevement $infoEnlevement = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setInfoEnlevement($infoEnlevement)
            ->setLibelleErreur($libelleErreur)
        ;
    }

    /**
     * Get codeErreur value.
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }

    /**
     * Set codeErreur value.
     *
     * @param int $codeErreur
     *
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;

        return $this;
    }

    /**
     * Get infoEnlevement value.
     *
     * @return null|\Chronopost\StructType\InfoEnlevement
     */
    public function getInfoEnlevement(): ?InfoEnlevement
    {
        return $this->infoEnlevement;
    }

    /**
     * Set infoEnlevement value.
     *
     * @param \Chronopost\StructType\InfoEnlevement $infoEnlevement
     *
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setInfoEnlevement(?InfoEnlevement $infoEnlevement = null): self
    {
        $this->infoEnlevement = $infoEnlevement;

        return $this;
    }

    /**
     * Get libelleErreur value.
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }

    /**
     * Set libelleErreur value.
     *
     * @param string $libelleErreur
     *
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;

        return $this;
    }
}
