<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;

/**
 * This class stands for resultMonoParcelExpeditionValue StructType.
 */
class ResultMonoParcelExpeditionValue extends ResultExpeditionValueV3
{
    /**
     * The pdfEtiquette
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pdfEtiquette = null;

    /**
     * Constructor method for resultMonoParcelExpeditionValue.
     *
     * @param string $pdfEtiquette
     *
     * @uses ResultMonoParcelExpeditionValue::setPdfEtiquette()
     */
    public function __construct(?string $pdfEtiquette = null)
    {
        $this
            ->setPdfEtiquette($pdfEtiquette)
        ;
    }

    /**
     * Get pdfEtiquette value.
     */
    public function getPdfEtiquette(): ?string
    {
        return $this->pdfEtiquette;
    }

    /**
     * Set pdfEtiquette value.
     *
     * @param string $pdfEtiquette
     *
     * @return ResultMonoParcelExpeditionValue
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
