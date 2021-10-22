<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdContraintesAgence StructType.
 */
class EsdContraintesAgence extends AbstractStructBase
{
    /**
     * The battement
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?int $battement = null;
    /**
     * The battementEnHeure
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $battementEnHeure = null;
    /**
     * The codeAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeAgence = null;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codePays = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codePostal = null;
    /**
     * The hla
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hla = null;
    /**
     * The hlp
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hlp = null;
    /**
     * The hppt
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hppt = null;
    /**
     * The nomAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $nomAgence = null;
    /**
     * The raisonNonActivite
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $raisonNonActivite = null;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ville = null;
    /**
     * The zoneA.
     */
    protected ?bool $zoneA = null;

    /**
     * Constructor method for esdContraintesAgence.
     *
     * @uses EsdContraintesAgence::setBattement()
     * @uses EsdContraintesAgence::setBattementEnHeure()
     * @uses EsdContraintesAgence::setCodeAgence()
     * @uses EsdContraintesAgence::setCodePays()
     * @uses EsdContraintesAgence::setCodePostal()
     * @uses EsdContraintesAgence::setHla()
     * @uses EsdContraintesAgence::setHlp()
     * @uses EsdContraintesAgence::setHppt()
     * @uses EsdContraintesAgence::setNomAgence()
     * @uses EsdContraintesAgence::setRaisonNonActivite()
     * @uses EsdContraintesAgence::setVille()
     * @uses EsdContraintesAgence::setZoneA()
     *
     * @param int    $battement
     * @param string $battementEnHeure
     * @param string $codeAgence
     * @param string $codePays
     * @param string $codePostal
     * @param string $hla
     * @param string $hlp
     * @param string $hppt
     * @param string $nomAgence
     * @param string $raisonNonActivite
     * @param string $ville
     * @param bool   $zoneA
     */
    public function __construct(?int $battement = null, ?string $battementEnHeure = null, ?string $codeAgence = null, ?string $codePays = null, ?string $codePostal = null, ?string $hla = null, ?string $hlp = null, ?string $hppt = null, ?string $nomAgence = null, ?string $raisonNonActivite = null, ?string $ville = null, ?bool $zoneA = null)
    {
        $this
            ->setBattement($battement)
            ->setBattementEnHeure($battementEnHeure)
            ->setCodeAgence($codeAgence)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setHla($hla)
            ->setHlp($hlp)
            ->setHppt($hppt)
            ->setNomAgence($nomAgence)
            ->setRaisonNonActivite($raisonNonActivite)
            ->setVille($ville)
            ->setZoneA($zoneA)
        ;
    }

    /**
     * Get battement value.
     */
    public function getBattement(): ?int
    {
        return $this->battement;
    }

    /**
     * Set battement value.
     *
     * @param int $battement
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setBattement(?int $battement = null): self
    {
        // validation for constraint: int
        if (!is_null($battement) && !(is_int($battement) || ctype_digit($battement))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($battement, true), gettype($battement)), __LINE__);
        }
        $this->battement = $battement;

        return $this;
    }

    /**
     * Get battementEnHeure value.
     */
    public function getBattementEnHeure(): ?string
    {
        return $this->battementEnHeure;
    }

    /**
     * Set battementEnHeure value.
     *
     * @param string $battementEnHeure
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setBattementEnHeure(?string $battementEnHeure = null): self
    {
        // validation for constraint: string
        if (!is_null($battementEnHeure) && !is_string($battementEnHeure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($battementEnHeure, true), gettype($battementEnHeure)), __LINE__);
        }
        $this->battementEnHeure = $battementEnHeure;

        return $this;
    }

    /**
     * Get codeAgence value.
     */
    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    /**
     * Set codeAgence value.
     *
     * @param string $codeAgence
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setCodeAgence(?string $codeAgence = null): self
    {
        // validation for constraint: string
        if (!is_null($codeAgence) && !is_string($codeAgence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeAgence, true), gettype($codeAgence)), __LINE__);
        }
        $this->codeAgence = $codeAgence;

        return $this;
    }

    /**
     * Get codePays value.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Set codePays value.
     *
     * @param string $codePays
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setCodePays(?string $codePays = null): self
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;

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
     * @return \Chronopost\StructType\EsdContraintesAgence
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
     * Get hla value.
     */
    public function getHla(): ?string
    {
        return $this->hla;
    }

    /**
     * Set hla value.
     *
     * @param string $hla
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHla(?string $hla = null): self
    {
        // validation for constraint: string
        if (!is_null($hla) && !is_string($hla)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hla, true), gettype($hla)), __LINE__);
        }
        $this->hla = $hla;

        return $this;
    }

    /**
     * Get hlp value.
     */
    public function getHlp(): ?string
    {
        return $this->hlp;
    }

    /**
     * Set hlp value.
     *
     * @param string $hlp
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHlp(?string $hlp = null): self
    {
        // validation for constraint: string
        if (!is_null($hlp) && !is_string($hlp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hlp, true), gettype($hlp)), __LINE__);
        }
        $this->hlp = $hlp;

        return $this;
    }

    /**
     * Get hppt value.
     */
    public function getHppt(): ?string
    {
        return $this->hppt;
    }

    /**
     * Set hppt value.
     *
     * @param string $hppt
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHppt(?string $hppt = null): self
    {
        // validation for constraint: string
        if (!is_null($hppt) && !is_string($hppt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hppt, true), gettype($hppt)), __LINE__);
        }
        $this->hppt = $hppt;

        return $this;
    }

    /**
     * Get nomAgence value.
     */
    public function getNomAgence(): ?string
    {
        return $this->nomAgence;
    }

    /**
     * Set nomAgence value.
     *
     * @param string $nomAgence
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setNomAgence(?string $nomAgence = null): self
    {
        // validation for constraint: string
        if (!is_null($nomAgence) && !is_string($nomAgence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomAgence, true), gettype($nomAgence)), __LINE__);
        }
        $this->nomAgence = $nomAgence;

        return $this;
    }

    /**
     * Get raisonNonActivite value.
     */
    public function getRaisonNonActivite(): ?string
    {
        return $this->raisonNonActivite;
    }

    /**
     * Set raisonNonActivite value.
     *
     * @param string $raisonNonActivite
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setRaisonNonActivite(?string $raisonNonActivite = null): self
    {
        // validation for constraint: string
        if (!is_null($raisonNonActivite) && !is_string($raisonNonActivite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonNonActivite, true), gettype($raisonNonActivite)), __LINE__);
        }
        $this->raisonNonActivite = $raisonNonActivite;

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
     * @return \Chronopost\StructType\EsdContraintesAgence
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

    /**
     * Get zoneA value.
     */
    public function getZoneA(): ?bool
    {
        return $this->zoneA;
    }

    /**
     * Set zoneA value.
     *
     * @param bool $zoneA
     *
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setZoneA(?bool $zoneA = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zoneA) && !is_bool($zoneA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zoneA, true), gettype($zoneA)), __LINE__);
        }
        $this->zoneA = $zoneA;

        return $this;
    }
}
