<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd StructType
 * @subpackage Structs
 */
class ParticularitesColisDpd extends AbstractStructBase
{
    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var InfoDouanieres|null
     */
    protected ?InfoDouanieres $infoDouanieres = null;
    /**
     * The valeurAssuree
     * @var float|null
     */
    protected ?float $valeurAssuree = null;

    /**
     * Constructor method for particularitesColisDpd
     * @param InfoDouanieres $infoDouanieres
     * @param float $valeurAssuree
     * @uses ParticularitesColisDpd::setInfoDouanieres()
     * @uses ParticularitesColisDpd::setValeurAssuree()
     */
    public function __construct(?InfoDouanieres $infoDouanieres = null, ?float $valeurAssuree = null)
    {
        $this
            ->setInfoDouanieres($infoDouanieres)
            ->setValeurAssuree($valeurAssuree);
    }

    /**
     * Get infoDouanieres value
     * @return InfoDouanieres|null
     */
    public function getInfoDouanieres(): ?InfoDouanieres
    {
        return $this->infoDouanieres;
    }

    /**
     * Set infoDouanieres value
     * @param InfoDouanieres $infoDouanieres
     * @return ParticularitesColisDpd
     */
    public function setInfoDouanieres(?InfoDouanieres $infoDouanieres = null): self
    {
        $this->infoDouanieres = $infoDouanieres;

        return $this;
    }

    /**
     * Get valeurAssuree value
     * @return float|null
     */
    public function getValeurAssuree(): ?float
    {
        return $this->valeurAssuree;
    }

    /**
     * Set valeurAssuree value
     * @param float $valeurAssuree
     * @return ParticularitesColisDpd
     */
    public function setValeurAssuree(?float $valeurAssuree = null): self
    {
        // validation for constraint: float
        if (!is_null($valeurAssuree) && !(is_float($valeurAssuree) || is_numeric($valeurAssuree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valeurAssuree, true), gettype($valeurAssuree)), __LINE__);
        }
        $this->valeurAssuree = $valeurAssuree;

        return $this;
    }
}
