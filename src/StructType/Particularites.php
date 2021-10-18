<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularites StructType.
 */
class Particularites extends AbstractStructBase
{
    /**
     * The hauteur.
     */
    protected ?float $hauteur = null;
    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $instructionsParticulieres = null;
    /**
     * The largeur.
     */
    protected ?float $largeur = null;
    /**
     * The longueur.
     */
    protected ?float $longueur = null;
    /**
     * The nombreEnvois.
     */
    protected ?int $nombreEnvois = null;
    /**
     * The poids.
     */
    protected ?float $poids = null;

    /**
     * Constructor method for particularites.
     *
     * @param float  $hauteur
     * @param string $instructionsParticulieres
     * @param float  $largeur
     * @param float  $longueur
     * @param int    $nombreEnvois
     * @param float  $poids
     *
     * @uses Particularites::setHauteur()
     * @uses Particularites::setInstructionsParticulieres()
     * @uses Particularites::setLargeur()
     * @uses Particularites::setLongueur()
     * @uses Particularites::setNombreEnvois()
     * @uses Particularites::setPoids()
     */
    public function __construct(?float $hauteur = null, ?string $instructionsParticulieres = null, ?float $largeur = null, ?float $longueur = null, ?int $nombreEnvois = null, ?float $poids = null)
    {
        $this
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
        ;
    }

    /**
     * Get hauteur value.
     */
    public function getHauteur(): ?float
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur value.
     *
     * @param float $hauteur
     *
     * @return Particularites
     */
    public function setHauteur(?float $hauteur = null): self
    {
        // validation for constraint: float
        if (!is_null($hauteur) && !(is_float($hauteur) || is_numeric($hauteur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
        }
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get instructionsParticulieres value.
     */
    public function getInstructionsParticulieres(): ?string
    {
        return $this->instructionsParticulieres;
    }

    /**
     * Set instructionsParticulieres value.
     *
     * @param string $instructionsParticulieres
     *
     * @return Particularites
     */
    public function setInstructionsParticulieres(?string $instructionsParticulieres = null): self
    {
        // validation for constraint: string
        if (!is_null($instructionsParticulieres) && !is_string($instructionsParticulieres)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructionsParticulieres, true), gettype($instructionsParticulieres)), __LINE__);
        }
        $this->instructionsParticulieres = $instructionsParticulieres;

        return $this;
    }

    /**
     * Get largeur value.
     */
    public function getLargeur(): ?float
    {
        return $this->largeur;
    }

    /**
     * Set largeur value.
     *
     * @param float $largeur
     *
     * @return Particularites
     */
    public function setLargeur(?float $largeur = null): self
    {
        // validation for constraint: float
        if (!is_null($largeur) && !(is_float($largeur) || is_numeric($largeur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get longueur value.
     */
    public function getLongueur(): ?float
    {
        return $this->longueur;
    }

    /**
     * Set longueur value.
     *
     * @param float $longueur
     *
     * @return Particularites
     */
    public function setLongueur(?float $longueur = null): self
    {
        // validation for constraint: float
        if (!is_null($longueur) && !(is_float($longueur) || is_numeric($longueur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
        }
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get nombreEnvois value.
     */
    public function getNombreEnvois(): ?int
    {
        return $this->nombreEnvois;
    }

    /**
     * Set nombreEnvois value.
     *
     * @param int $nombreEnvois
     *
     * @return Particularites
     */
    public function setNombreEnvois(?int $nombreEnvois = null): self
    {
        // validation for constraint: int
        if (!is_null($nombreEnvois) && !(is_int($nombreEnvois) || ctype_digit($nombreEnvois))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreEnvois, true), gettype($nombreEnvois)), __LINE__);
        }
        $this->nombreEnvois = $nombreEnvois;

        return $this;
    }

    /**
     * Get poids value.
     */
    public function getPoids(): ?float
    {
        return $this->poids;
    }

    /**
     * Set poids value.
     *
     * @param float $poids
     *
     * @return Particularites
     */
    public function setPoids(?float $poids = null): self
    {
        // validation for constraint: float
        if (!is_null($poids) && !(is_float($poids) || is_numeric($poids))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->poids = $poids;

        return $this;
    }
}
