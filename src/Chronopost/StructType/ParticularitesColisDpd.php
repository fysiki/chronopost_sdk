<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd StructType.
 */
class ParticularitesColisDpd extends AbstractStructBase
{
    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\InfoDouanieres $infoDouanieres = null;
    /**
     * The valeurAssuree.
     */
    protected ?float $valeurAssuree = null;

    /**
     * Constructor method for particularitesColisDpd.
     *
     * @uses ParticularitesColisDpd::setInfoDouanieres()
     * @uses ParticularitesColisDpd::setValeurAssuree()
     *
     * @param \Chronopost\StructType\InfoDouanieres $infoDouanieres
     * @param float                                 $valeurAssuree
     */
    public function __construct(?InfoDouanieres $infoDouanieres = null, ?float $valeurAssuree = null)
    {
        $this
            ->setInfoDouanieres($infoDouanieres)
            ->setValeurAssuree($valeurAssuree)
        ;
    }

    /**
     * Get infoDouanieres value.
     *
     * @return null|\Chronopost\StructType\InfoDouanieres
     */
    public function getInfoDouanieres(): ?InfoDouanieres
    {
        return $this->infoDouanieres;
    }

    /**
     * Set infoDouanieres value.
     *
     * @param \Chronopost\StructType\InfoDouanieres $infoDouanieres
     *
     * @return \Chronopost\StructType\ParticularitesColisDpd
     */
    public function setInfoDouanieres(?InfoDouanieres $infoDouanieres = null): self
    {
        $this->infoDouanieres = $infoDouanieres;

        return $this;
    }

    /**
     * Get valeurAssuree value.
     */
    public function getValeurAssuree(): ?float
    {
        return $this->valeurAssuree;
    }

    /**
     * Set valeurAssuree value.
     *
     * @param float $valeurAssuree
     *
     * @return \Chronopost\StructType\ParticularitesColisDpd
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
