<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-12-04
 * Time: 14:58
 */

namespace App\Http\Controller;

/**
 * Class RestController
 * @package App\Http\Controllers
 * @Controller()
 */
class RestController
{
    /**
     * @Route("@")
     */
    public function index(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @Route("/{id}")
     */
    public function view(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @Route("@", method="POST")
     */
    public function create(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function update(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function patch(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function delete(): void
    {
        echo __METHOD__ . PHP_EOL;
    }
}
