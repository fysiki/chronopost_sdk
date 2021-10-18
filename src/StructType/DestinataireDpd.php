<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType
 * @subpackage Structs
 */
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AdresseDestinataire|null
     */
    protected ?\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\InfoClient|null
     */
    protected ?\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Particularites|null
     */
    protected ?\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ParticularitesColisDpd|null
     */
    protected ?\StructType\ParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \StructType\AdresseDestinataire $adresseDestinataire
     * @param \StructType\InfoClient $infoClient
     * @param \StructType\Particularites $particularites
     * @param \StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\StructType\AdresseDestinataire $adresseDestinataire = null, ?\StructType\InfoClient $infoClient = null, ?\StructType\Particularites $particularites = null, ?\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\StructType\AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \StructType\AdresseDestinataire $adresseDestinataire
     * @return \StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?\StructType\AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \StructType\InfoClient|null
     */
    public function getInfoClient(): ?\StructType\InfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \StructType\InfoClient $infoClient
     * @return \StructType\DestinataireDpd
     */
    public function setInfoClient(?\StructType\InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \StructType\Particularites|null
     */
    public function getParticularites(): ?\StructType\Particularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \StructType\Particularites $particularites
     * @return \StructType\DestinataireDpd
     */
    public function setParticularites(?\StructType\Particularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\StructType\ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?\StructType\ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
