<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse.
 */
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultFaisabiliteESD $return = null;

    /**
     * Constructor method for faisabiliteESDResponse.
     *
     * @uses FaisabiliteESDResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultFaisabiliteESD
     */
    public function getReturn(): ?ResultFaisabiliteESD
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultFaisabiliteESD $return
     *
     * @return \Chronopost\StructType\FaisabiliteESDResponse
     */
    public function setReturn(?ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
