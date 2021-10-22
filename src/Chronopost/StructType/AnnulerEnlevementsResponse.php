<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse.
 */
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultAnnulerEnlevement $return = null;

    /**
     * Constructor method for annulerEnlevementsResponse.
     *
     * @uses AnnulerEnlevementsResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultAnnulerEnlevement
     */
    public function getReturn(): ?ResultAnnulerEnlevement
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultAnnulerEnlevement $return
     *
     * @return \Chronopost\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
