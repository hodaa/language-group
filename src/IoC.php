<?php

namespace  Hoda;

class IoC
{
    protected static $registry = [];

    /**
     * Add a new resolver to the registry array.
     *
     * @param string $name    The id
     * @param object $resolve Closure that creates instance
     */
    public static function register($name, \Closure $resolve)
    {
        static::$registry[$name] = $resolve;
    }

    /**
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public static function resolve($name)
    {
        if (static::isRegistered($name)) {
            $name = static::$registry[$name];

            return $name();
        }

        throw new \Exception("Nothing registered with that {$name} ");
    }

    /**
     * Determine whether the id is registered.
     *
     * @param string $name The id
     *
     * @return bool Whether to id exists or not
     */
    public static function isRegistered($name)
    {
        return array_key_exists($name, static::$registry);
    }
}
