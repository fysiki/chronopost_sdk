<?php

declare(strict_types=1);

namespace StructType;

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
    protected ?AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ParticularitesColisDpd $particularitesColisDpd = null;

    /**
     * Constructor method for destinataireDpd.
     *
     * @param AdresseDestinataire    $adresseDestinataire
     * @param InfoClient             $infoClient
     * @param Particularites         $particularites
     * @param ParticularitesColisDpd $particularitesColisDpd
     *
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
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
     */
    public function getAdresseDestinataire(): ?AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }

    /**
     * Set adresseDestinataire value.
     *
     * @param AdresseDestinataire $adresseDestinataire
     *
     * @return DestinataireDpd
     */
    public function setAdresseDestinataire(?AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;

        return $this;
    }

    /**
     * Get infoClient value.
     */
    public function getInfoClient(): ?InfoClient
    {
        return $this->infoClient;
    }

    /**
     * Set infoClient value.
     *
     * @param InfoClient $infoClient
     *
     * @return DestinataireDpd
     */
    public function setInfoClient(?InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;

        return $this;
    }

    /**
     * Get particularites value.
     */
    public function getParticularites(): ?Particularites
    {
        return $this->particularites;
    }

    /**
     * Set particularites value.
     *
     * @param Particularites $particularites
     *
     * @return DestinataireDpd
     */
    public function setParticularites(?Particularites $particularites = null): self
    {
        $this->particularites = $particularites;

        return $this;
    }

    /**
     * Get particularitesColisDpd value.
     */
    public function getParticularitesColisDpd(): ?ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }

    /**
     * Set particularitesColisDpd value.
     *
     * @param ParticularitesColisDpd $particularitesColisDpd
     *
     * @return DestinataireDpd
     */
    public function setParticularitesColisDpd(?ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;

        return $this;
    }
}
