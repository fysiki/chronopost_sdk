<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultMonoParcelExpeditionValue StructType
 * @subpackage Structs
 */
class ResultMonoParcelExpeditionValue extends ResultExpeditionValueV3
{
    /**
     * The pdfEtiquette
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pdfEtiquette = null;
    /**
     * Constructor method for resultMonoParcelExpeditionValue
     * @uses ResultMonoParcelExpeditionValue::setPdfEtiquette()
     * @param string $pdfEtiquette
     */
    public function __construct(?string $pdfEtiquette = null)
    {
        $this
            ->setPdfEtiquette($pdfEtiquette);
    }
    /**
     * Get pdfEtiquette value
     * @return string|null
     */
    public function getPdfEtiquette(): ?string
    {
        return $this->pdfEtiquette;
    }
    /**
     * Set pdfEtiquette value
     * @param string $pdfEtiquette
     * @return \StructType\ResultMonoParcelExpeditionValue
     */
    public function setPdfEtiquette(?string $pdfEtiquette = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfEtiquette) && !is_string($pdfEtiquette)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfEtiquette, true), gettype($pdfEtiquette)), __LINE__);
        }
        $this->pdfEtiquette = $pdfEtiquette;
        
        return $this;
    }
}
