<?php

namespace AppBundle\LateStaticBinding;

/**
 * Class DomainObject
 * @package AppBundle\LateStaticBinding
 */
abstract class DomainObject
{
    public static function create()
    {
        /**
         * if use "self" you have try to create "DomainObject"
         * when you call it from child class, but with static
         * you create object of child class.
         */
        return new static();
    }
}