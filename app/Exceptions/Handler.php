<?php
/**
 * Handler.php.
 *
 * @author   Edwin Dayot <edwin@greenpandagames.com>
 */

namespace App\Exceptions;

use Shorty\Framework\Routing\Exceptions\HTTPException;
use GuzzleHttp\Psr7\Response;

/**
 * Class Handler.
 */
class Handler extends \Shorty\Framework\Exceptions\Handler
{
    /**
     * Renders Exception.
     *
     * @param $exception
     *
     * @return \GuzzleHttp\Psr7\Response|null
     */
    public function render($exception)
    {
        if ($exception instanceof HTTPException) {
            return new Response($exception->getCode(), [], $exception->getMessage());
        }

        return null;
    }
}
