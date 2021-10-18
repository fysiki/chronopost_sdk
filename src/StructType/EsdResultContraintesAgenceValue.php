<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdResultContraintesAgenceValue StructType
 * @subpackage Structs
 */
class EsdResultContraintesAgenceValue extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The esdContraintesAgence
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EsdContraintesAgence[]
     */
    protected ?array $esdContraintesAgence = null;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libelleErreur = null;
    /**
     * Constructor method for esdResultContraintesAgenceValue
     * @uses EsdResultContraintesAgenceValue::setCodeErreur()
     * @uses EsdResultContraintesAgenceValue::setEsdContraintesAgence()
     * @uses EsdResultContraintesAgenceValue::setLibelleErreur()
     * @param int $codeErreur
     * @param \StructType\EsdContraintesAgence[] $esdContraintesAgence
     * @param string $libelleErreur
     */
    public function __construct(?int $codeErreur = null, ?array $esdContraintesAgence = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setEsdContraintesAgence($esdContraintesAgence)
            ->setLibelleErreur($libelleErreur);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \StructType\EsdResultContraintesAgenceValue
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        
        return $this;
    }
    /**
     * Get esdContraintesAgence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EsdContraintesAgence[]
     */
    public function getEsdContraintesAgence(): ?array
    {
        return isset($this->esdContraintesAgence) ? $this->esdContraintesAgence : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEsdContraintesAgence method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEsdContraintesAgence method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEsdContraintesAgenceForArrayConstraintsFromSetEsdContraintesAgence(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $esdResultContraintesAgenceValueEsdContraintesAgenceItem) {
            // validation for constraint: itemType
            if (!$esdResultContraintesAgenceValueEsdContraintesAgenceItem instanceof \StructType\EsdContraintesAgence) {
                $invalidValues[] = is_object($esdResultContraintesAgenceValueEsdContraintesAgenceItem) ? get_class($esdResultContraintesAgenceValueEsdContraintesAgenceItem) : sprintf('%s(%s)', gettype($esdResultContraintesAgenceValueEsdContraintesAgenceItem), var_export($esdResultContraintesAgenceValueEsdContraintesAgenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The esdContraintesAgence property can only contain items of type \StructType\EsdContraintesAgence, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set esdContraintesAgence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EsdContraintesAgence[] $esdContraintesAgence
     * @return \StructType\EsdResultContraintesAgenceValue
     */
    public function setEsdContraintesAgence(?array $esdContraintesAgence = null): self
    {
        // validation for constraint: array
        if ('' !== ($esdContraintesAgenceArrayErrorMessage = self::validateEsdContraintesAgenceForArrayConstraintsFromSetEsdContraintesAgence($esdContraintesAgence))) {
            throw new InvalidArgumentException($esdContraintesAgenceArrayErrorMessage, __LINE__);
        }
        if (is_null($esdContraintesAgence) || (is_array($esdContraintesAgence) && empty($esdContraintesAgence))) {
            unset($this->esdContraintesAgence);
        } else {
            $this->esdContraintesAgence = $esdContraintesAgence;
        }
        
        return $this;
    }
    /**
     * Add item to esdContraintesAgence value
     * @throws InvalidArgumentException
     * @param \StructType\EsdContraintesAgence $item
     * @return \StructType\EsdResultContraintesAgenceValue
     */
    public function addToEsdContraintesAgence(\StructType\EsdContraintesAgence $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EsdContraintesAgence) {
            throw new InvalidArgumentException(sprintf('The esdContraintesAgence property can only contain items of type \StructType\EsdContraintesAgence, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->esdContraintesAgence[] = $item;
        
        return $this;
    }
    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }
    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return \StructType\EsdResultContraintesAgenceValue
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;
        
        return $this;
    }
}
