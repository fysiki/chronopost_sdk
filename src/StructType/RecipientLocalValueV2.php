<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientLocalValueV2 StructType
 * @subpackage Structs
 */
class RecipientLocalValueV2 extends RecipientLocalValue
{
    /**
     * The recipientType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientType = null;
    /**
     * The thirdParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $thirdParty = null;
    /**
     * Constructor method for recipientLocalValueV2
     * @uses RecipientLocalValueV2::setRecipientType()
     * @uses RecipientLocalValueV2::setThirdParty()
     * @param string $recipientType
     * @param string $thirdParty
     */
    public function __construct(?string $recipientType = null, ?string $thirdParty = null)
    {
        $this
            ->setRecipientType($recipientType)
            ->setThirdParty($thirdParty);
    }
    /**
     * Get recipientType value
     * @return string|null
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }
    /**
     * Set recipientType value
     * @param string $recipientType
     * @return \StructType\RecipientLocalValueV2
     */
    public function setRecipientType(?string $recipientType = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientType) && !is_string($recipientType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientType, true), gettype($recipientType)), __LINE__);
        }
        $this->recipientType = $recipientType;
        
        return $this;
    }
    /**
     * Get thirdParty value
     * @return string|null
     */
    public function getThirdParty(): ?string
    {
        return $this->thirdParty;
    }
    /**
     * Set thirdParty value
     * @param string $thirdParty
     * @return \StructType\RecipientLocalValueV2
     */
    public function setThirdParty(?string $thirdParty = null): self
    {
        // validation for constraint: string
        if (!is_null($thirdParty) && !is_string($thirdParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdParty, true), gettype($thirdParty)), __LINE__);
        }
        $this->thirdParty = $thirdParty;
        
        return $this;
    }
}
