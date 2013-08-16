<?php

namespace Doctrine\ODM\PHPCR\Query\QueryBuilder;

class Property extends AbstractLeafNode implements 
    SourceJoinConditionInterface
{
    protected $propertyName;
    protected $selectorName;

    public function __construct(AbstractNode $parent, $propertyName, $selectorName)
    {
        $this->propertyName = $propertyName;
        $this->selectorName = $selectorName;
        parent::__construct($parent);
    }

    public function getPropertyName() 
    {
        return $this->propertyName;
    }

    public function getSelectorName() 
    {
        return $this->selectorName;
    }
}
