<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultEnlevementNational StructType
 * @subpackage Structs
 */
class ResultEnlevementNational extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The infoEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var InfoEnlevement|null
     */
    protected ?InfoEnlevement $infoEnlevement = null;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libelleErreur = null;

    /**
     * Constructor method for resultEnlevementNational
     * @param int $codeErreur
     * @param InfoEnlevement $infoEnlevement
     * @param string $libelleErreur
     * @uses ResultEnlevementNational::setCodeErreur()
     * @uses ResultEnlevementNational::setInfoEnlevement()
     * @uses ResultEnlevementNational::setLibelleErreur()
     */
    public function __construct(?int $codeErreur = null, ?InfoEnlevement $infoEnlevement = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setInfoEnlevement($infoEnlevement)
            ->setLibelleErreur($libelleErreur);
    }

    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }

    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return ResultEnlevementNational
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
     * Get infoEnlevement value
     * @return InfoEnlevement|null
     */
    public function getInfoEnlevement(): ?InfoEnlevement
    {
        return $this->infoEnlevement;
    }

    /**
     * Set infoEnlevement value
     * @param InfoEnlevement $infoEnlevement
     * @return ResultEnlevementNational
     */
    public function setInfoEnlevement(?InfoEnlevement $infoEnlevement = null): self
    {
        $this->infoEnlevement = $infoEnlevement;

        return $this;
    }

    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }

    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return ResultEnlevementNational
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
