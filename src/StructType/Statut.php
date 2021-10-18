<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statut StructType
 * @subpackage Structs
 */
class Statut extends AbstractStructBase
{
    /**
     * The entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var Entry[]
     */
    protected ?array $entry = null;

    /**
     * Constructor method for statut
     * @param Entry[] $entry
     * @uses Statut::setEntry()
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }

    /**
     * Get entry value
     * @return Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->entry;
    }

    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $statutEntryItem) {
            // validation for constraint: itemType
            if (!$statutEntryItem instanceof Entry) {
                $invalidValues[] = is_object($statutEntryItem) ? get_class($statutEntryItem) : sprintf('%s(%s)', gettype($statutEntryItem), var_export($statutEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entry property can only contain items of type \StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set entry value
     * @param Entry[] $entry
     * @return Statut
     * @throws InvalidArgumentException
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->entry = $entry;

        return $this;
    }

    /**
     * Add item to entry value
     * @param Entry $item
     * @return Statut
     * @throws InvalidArgumentException
     */
    public function addToEntry(Entry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Entry) {
            throw new InvalidArgumentException(sprintf('The entry property can only contain items of type \StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entry[] = $item;

        return $this;
    }
}
