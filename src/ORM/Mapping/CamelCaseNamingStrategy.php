<?php


namespace App\ORM\Mapping;


use Doctrine\ORM\Mapping\NamingStrategy;

class CamelCaseNamingStrategy implements NamingStrategy
{

    public function classToTableName($className)
    {
        // TODO: Implement classToTableName() method.
    }

    public function propertyToColumnName($propertyName, $className = null)
    {
        // TODO: Implement propertyToColumnName() method.
    }

    public function embeddedFieldToColumnName($propertyName, $embeddedColumnName, $className = null, $embeddedClassName = null)
    {
        // TODO: Implement embeddedFieldToColumnName() method.
    }

    public function referenceColumnName()
    {
        // TODO: Implement referenceColumnName() method.
    }

    public function joinColumnName($propertyName)
    {
        // TODO: Implement joinColumnName() method.
    }

    public function joinTableName($sourceEntity, $targetEntity, $propertyName = null)
    {
        // TODO: Implement joinTableName() method.
    }

    public function joinKeyColumnName($entityName, $referencedColumnName = null)
    {
        // TODO: Implement joinKeyColumnName() method.
    }
}