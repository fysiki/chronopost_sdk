<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultAnnulerEnlevement|null
     */
    protected ?\StructType\ResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\StructType\ResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultAnnulerEnlevement $return
     * @return \StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?\StructType\ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
