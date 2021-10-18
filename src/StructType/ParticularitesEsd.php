<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesEsd StructType.
 */
class ParticularitesEsd extends AbstractStructBase
{
    /**
     * The etudeDeFaisabilite.
     */
    protected ?bool $etudeDeFaisabilite = null;
    /**
     * The grosVolume.
     */
    protected ?bool $grosVolume = null;
    /**
     * The hauteur.
     */
    protected ?int $hauteur = null;
    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $instructionsParticulieres = null;
    /**
     * The largeur.
     */
    protected ?int $largeur = null;
    /**
     * The listeColisAnnonces
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $listeColisAnnonces = null;
    /**
     * The longueur.
     */
    protected ?int $longueur = null;
    /**
     * The nombreEnvois.
     */
    protected ?int $nombreEnvois = null;
    /**
     * The poids.
     */
    protected ?float $poids = null;
    /**
     * The volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $volume = null;

    /**
     * Constructor method for particularitesEsd.
     *
     * @param bool   $etudeDeFaisabilite
     * @param bool   $grosVolume
     * @param int    $hauteur
     * @param string $instructionsParticulieres
     * @param int    $largeur
     * @param string $listeColisAnnonces
     * @param int    $longueur
     * @param int    $nombreEnvois
     * @param float  $poids
     * @param string $volume
     *
     * @uses ParticularitesEsd::setEtudeDeFaisabilite()
     * @uses ParticularitesEsd::setGrosVolume()
     * @uses ParticularitesEsd::setHauteur()
     * @uses ParticularitesEsd::setInstructionsParticulieres()
     * @uses ParticularitesEsd::setLargeur()
     * @uses ParticularitesEsd::setListeColisAnnonces()
     * @uses ParticularitesEsd::setLongueur()
     * @uses ParticularitesEsd::setNombreEnvois()
     * @uses ParticularitesEsd::setPoids()
     * @uses ParticularitesEsd::setVolume()
     */
    public function __construct(?bool $etudeDeFaisabilite = null, ?bool $grosVolume = null, ?int $hauteur = null, ?string $instructionsParticulieres = null, ?int $largeur = null, ?string $listeColisAnnonces = null, ?int $longueur = null, ?int $nombreEnvois = null, ?float $poids = null, ?string $volume = null)
    {
        $this
            ->setEtudeDeFaisabilite($etudeDeFaisabilite)
            ->setGrosVolume($grosVolume)
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setListeColisAnnonces($listeColisAnnonces)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
            ->setVolume($volume)
        ;
    }

    /**
     * Get etudeDeFaisabilite value.
     */
    public function getEtudeDeFaisabilite(): ?bool
    {
        return $this->etudeDeFaisabilite;
    }

    /**
     * Set etudeDeFaisabilite value.
     *
     * @param bool $etudeDeFaisabilite
     *
     * @return ParticularitesEsd
     */
    public function setEtudeDeFaisabilite(?bool $etudeDeFaisabilite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($etudeDeFaisabilite) && !is_bool($etudeDeFaisabilite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($etudeDeFaisabilite, true), gettype($etudeDeFaisabilite)), __LINE__);
        }
        $this->etudeDeFaisabilite = $etudeDeFaisabilite;

        return $this;
    }

    /**
     * Get grosVolume value.
     */
    public function getGrosVolume(): ?bool
    {
        return $this->grosVolume;
    }

    /**
     * Set grosVolume value.
     *
     * @param bool $grosVolume
     *
     * @return ParticularitesEsd
     */
    public function setGrosVolume(?bool $grosVolume = null): self
    {
        // validation for constraint: boolean
        if (!is_null($grosVolume) && !is_bool($grosVolume)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($grosVolume, true), gettype($grosVolume)), __LINE__);
        }
        $this->grosVolume = $grosVolume;

        return $this;
    }

    /**
     * Get hauteur value.
     */
    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur value.
     *
     * @param int $hauteur
     *
     * @return ParticularitesEsd
     */
    public function setHauteur(?int $hauteur = null): self
    {
        // validation for constraint: int
        if (!is_null($hauteur) && !(is_int($hauteur) || ctype_digit($hauteur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
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
     * @return ParticularitesEsd
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
    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    /**
     * Set largeur value.
     *
     * @param int $largeur
     *
     * @return ParticularitesEsd
     */
    public function setLargeur(?int $largeur = null): self
    {
        // validation for constraint: int
        if (!is_null($largeur) && !(is_int($largeur) || ctype_digit($largeur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get listeColisAnnonces value.
     */
    public function getListeColisAnnonces(): ?string
    {
        return $this->listeColisAnnonces;
    }

    /**
     * Set listeColisAnnonces value.
     *
     * @param string $listeColisAnnonces
     *
     * @return ParticularitesEsd
     */
    public function setListeColisAnnonces(?string $listeColisAnnonces = null): self
    {
        // validation for constraint: string
        if (!is_null($listeColisAnnonces) && !is_string($listeColisAnnonces)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listeColisAnnonces, true), gettype($listeColisAnnonces)), __LINE__);
        }
        $this->listeColisAnnonces = $listeColisAnnonces;

        return $this;
    }

    /**
     * Get longueur value.
     */
    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    /**
     * Set longueur value.
     *
     * @param int $longueur
     *
     * @return ParticularitesEsd
     */
    public function setLongueur(?int $longueur = null): self
    {
        // validation for constraint: int
        if (!is_null($longueur) && !(is_int($longueur) || ctype_digit($longueur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
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
     * @return ParticularitesEsd
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
     * @return ParticularitesEsd
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

    /**
     * Get volume value.
     */
    public function getVolume(): ?string
    {
        return $this->volume;
    }

    /**
     * Set volume value.
     *
     * @param string $volume
     *
     * @return ParticularitesEsd
     */
    public function setVolume(?string $volume = null): self
    {
        // validation for constraint: string
        if (!is_null($volume) && !is_string($volume)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        $this->volume = $volume;

        return $this;
    }
}
