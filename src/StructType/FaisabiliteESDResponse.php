<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultFaisabiliteESD|null
     */
    protected ?\StructType\ResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultFaisabiliteESD|null
     */
    public function getReturn(): ?\StructType\ResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultFaisabiliteESD $return
     * @return \StructType\FaisabiliteESDResponse
     */
    public function setReturn(?\StructType\ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
