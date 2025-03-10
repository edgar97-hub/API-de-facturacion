<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 */

namespace App\Service;

/**
 * Interface ConfigProviderInterface
 */
interface ConfigProviderInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function store($key, $value);
}