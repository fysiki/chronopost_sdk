<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType.
 */
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null;

    /**
     * Constructor method for destinataireDpd.
     *
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     *
     * @param \Chronopost\StructType\AdresseDestinataire    $adresseDestinataire
     * @param \Chronopost\StructType\InfoClient             $infoClient
     * @param \Chronopost\StructType\Particularites         $particularites
     * @param \Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?AdresseDestinataire $adresseDestinataire = null, ?InfoClient $infoClient = null, ?Particularites $particularites = null, ?ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd)
        ;
    }

    /**
     * Get adresseDestinataire value.
     *
     * @return null|\Chronopost\StructType\AdresseDestinataire
     */
    public function getAdresseDestinataire(): ?AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }

    /**
     * Set adresseDestinataire value.
     *
     * @param \Chronopost\StructType\AdresseDestinataire $adresseDestinataire
     *
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;

        return $this;
    }

    /**
     * Get infoClient value.
     *
     * @return null|\Chronopost\StructType\InfoClient
     */
    public function getInfoClient(): ?InfoClient
    {
        return $this->infoClient;
    }

    /**
     * Set infoClient value.
     *
     * @param \Chronopost\StructType\InfoClient $infoClient
     *
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setInfoClient(?InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;

        return $this;
    }

    /**
     * Get particularites value.
     *
     * @return null|\Chronopost\StructType\Particularites
     */
    public function getParticularites(): ?Particularites
    {
        return $this->particularites;
    }

    /**
     * Set particularites value.
     *
     * @param \Chronopost\StructType\Particularites $particularites
     *
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setParticularites(?Particularites $particularites = null): self
    {
        $this->particularites = $particularites;

        return $this;
    }

    /**
     * Get particularitesColisDpd value.
     *
     * @return null|\Chronopost\StructType\ParticularitesColisDpd
     */
    public function getParticularitesColisDpd(): ?ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }

    /**
     * Set particularitesColisDpd value.
     *
     * @param \Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     *
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;

        return $this;
    }
}
