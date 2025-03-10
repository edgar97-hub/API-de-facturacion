<?php

/**
 * Created by PhpStorm.
 * User: Giansalex
 */

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

/**
 * Interface RequestParserInterface
 */
interface RequestParserInterface
{
    /**
     * @param Request $request
     * @param string $class
     * @return mixed
     */
    function getObject(Request $request, string $class);

    /**
     * @param Request $request
     * @param string $key
     * @return mixed
     */
    function getKey(Request $request, string $key);
}
