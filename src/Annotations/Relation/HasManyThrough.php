<?php namespace Wetzel/DataMapper/Mapping;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
final class HasManyThrough extends Relation implements Annotation
{
    /**
     * @var string
     */
    public $through;

    /**
     * @var string
     */
    public $firstKey = null;

    /**
     * @var string
     */
    public $secondKey = null;
}