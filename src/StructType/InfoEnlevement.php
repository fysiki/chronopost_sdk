<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoEnlevement StructType.
 */
class InfoEnlevement extends AbstractStructBase
{
    /**
     * The ancienNumeroESD
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ancienNumeroESD = null;
    /**
     * The codeBu
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeBu = null;
    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeDepot = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codePostal = null;
    /**
     * The dateCreation
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $dateCreation = null;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $datePassage = null;
    /**
     * The idEnlevement.
     */
    protected ?int $idEnlevement = null;
    /**
     * The numeroUniqueESD
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $numeroUniqueESD = null;
    /**
     * The refDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $refDestinataire = null;
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $refEsdClient = null;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ville = null;

    /**
     * Constructor method for infoEnlevement.
     *
     * @param string $ancienNumeroESD
     * @param string $codeBu
     * @param string $codeDepot
     * @param string $codePostal
     * @param string $dateCreation
     * @param string $datePassage
     * @param int    $idEnlevement
     * @param string $numeroUniqueESD
     * @param string $refDestinataire
     * @param string $refEsdClient
     * @param string $ville
     *
     * @uses InfoEnlevement::setAncienNumeroESD()
     * @uses InfoEnlevement::setCodeBu()
     * @uses InfoEnlevement::setCodeDepot()
     * @uses InfoEnlevement::setCodePostal()
     * @uses InfoEnlevement::setDateCreation()
     * @uses InfoEnlevement::setDatePassage()
     * @uses InfoEnlevement::setIdEnlevement()
     * @uses InfoEnlevement::setNumeroUniqueESD()
     * @uses InfoEnlevement::setRefDestinataire()
     * @uses InfoEnlevement::setRefEsdClient()
     * @uses InfoEnlevement::setVille()
     */
    public function __construct(?string $ancienNumeroESD = null, ?string $codeBu = null, ?string $codeDepot = null, ?string $codePostal = null, ?string $dateCreation = null, ?string $datePassage = null, ?int $idEnlevement = null, ?string $numeroUniqueESD = null, ?string $refDestinataire = null, ?string $refEsdClient = null, ?string $ville = null)
    {
        $this
            ->setAncienNumeroESD($ancienNumeroESD)
            ->setCodeBu($codeBu)
            ->setCodeDepot($codeDepot)
            ->setCodePostal($codePostal)
            ->setDateCreation($dateCreation)
            ->setDatePassage($datePassage)
            ->setIdEnlevement($idEnlevement)
            ->setNumeroUniqueESD($numeroUniqueESD)
            ->setRefDestinataire($refDestinataire)
            ->setRefEsdClient($refEsdClient)
            ->setVille($ville)
        ;
    }

    /**
     * Get ancienNumeroESD value.
     */
    public function getAncienNumeroESD(): ?string
    {
        return $this->ancienNumeroESD;
    }

    /**
     * Set ancienNumeroESD value.
     *
     * @param string $ancienNumeroESD
     *
     * @return InfoEnlevement
     */
    public function setAncienNumeroESD(?string $ancienNumeroESD = null): self
    {
        // validation for constraint: string
        if (!is_null($ancienNumeroESD) && !is_string($ancienNumeroESD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ancienNumeroESD, true), gettype($ancienNumeroESD)), __LINE__);
        }
        $this->ancienNumeroESD = $ancienNumeroESD;

        return $this;
    }

    /**
     * Get codeBu value.
     */
    public function getCodeBu(): ?string
    {
        return $this->codeBu;
    }

    /**
     * Set codeBu value.
     *
     * @param string $codeBu
     *
     * @return InfoEnlevement
     */
    public function setCodeBu(?string $codeBu = null): self
    {
        // validation for constraint: string
        if (!is_null($codeBu) && !is_string($codeBu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeBu, true), gettype($codeBu)), __LINE__);
        }
        $this->codeBu = $codeBu;

        return $this;
    }

    /**
     * Get codeDepot value.
     */
    public function getCodeDepot(): ?string
    {
        return $this->codeDepot;
    }

    /**
     * Set codeDepot value.
     *
     * @param string $codeDepot
     *
     * @return InfoEnlevement
     */
    public function setCodeDepot(?string $codeDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDepot) && !is_string($codeDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepot, true), gettype($codeDepot)), __LINE__);
        }
        $this->codeDepot = $codeDepot;

        return $this;
    }

    /**
     * Get codePostal value.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Set codePostal value.
     *
     * @param string $codePostal
     *
     * @return InfoEnlevement
     */
    public function setCodePostal(?string $codePostal = null): self
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get dateCreation value.
     */
    public function getDateCreation(): ?string
    {
        return $this->dateCreation;
    }

    /**
     * Set dateCreation value.
     *
     * @param string $dateCreation
     *
     * @return InfoEnlevement
     */
    public function setDateCreation(?string $dateCreation = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCreation) && !is_string($dateCreation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreation, true), gettype($dateCreation)), __LINE__);
        }
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get datePassage value.
     */
    public function getDatePassage(): ?string
    {
        return $this->datePassage;
    }

    /**
     * Set datePassage value.
     *
     * @param string $datePassage
     *
     * @return InfoEnlevement
     */
    public function setDatePassage(?string $datePassage = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;

        return $this;
    }

    /**
     * Get idEnlevement value.
     */
    public function getIdEnlevement(): ?int
    {
        return $this->idEnlevement;
    }

    /**
     * Set idEnlevement value.
     *
     * @param int $idEnlevement
     *
     * @return InfoEnlevement
     */
    public function setIdEnlevement(?int $idEnlevement = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnlevement) && !(is_int($idEnlevement) || ctype_digit($idEnlevement))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnlevement, true), gettype($idEnlevement)), __LINE__);
        }
        $this->idEnlevement = $idEnlevement;

        return $this;
    }

    /**
     * Get numeroUniqueESD value.
     */
    public function getNumeroUniqueESD(): ?string
    {
        return $this->numeroUniqueESD;
    }

    /**
     * Set numeroUniqueESD value.
     *
     * @param string $numeroUniqueESD
     *
     * @return InfoEnlevement
     */
    public function setNumeroUniqueESD(?string $numeroUniqueESD = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroUniqueESD) && !is_string($numeroUniqueESD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroUniqueESD, true), gettype($numeroUniqueESD)), __LINE__);
        }
        $this->numeroUniqueESD = $numeroUniqueESD;

        return $this;
    }

    /**
     * Get refDestinataire value.
     */
    public function getRefDestinataire(): ?string
    {
        return $this->refDestinataire;
    }

    /**
     * Set refDestinataire value.
     *
     * @param string $refDestinataire
     *
     * @return InfoEnlevement
     */
    public function setRefDestinataire(?string $refDestinataire = null): self
    {
        // validation for constraint: string
        if (!is_null($refDestinataire) && !is_string($refDestinataire)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refDestinataire, true), gettype($refDestinataire)), __LINE__);
        }
        $this->refDestinataire = $refDestinataire;

        return $this;
    }

    /**
     * Get refEsdClient value.
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }

    /**
     * Set refEsdClient value.
     *
     * @param string $refEsdClient
     *
     * @return InfoEnlevement
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;

        return $this;
    }

    /**
     * Get ville value.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Set ville value.
     *
     * @param string $ville
     *
     * @return InfoEnlevement
     */
    public function setVille(?string $ville = null): self
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->ville = $ville;

        return $this;
    }
}
