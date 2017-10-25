<?php
/**
 * AuthenticationMiddleware.php.
 *
 * @author   Edwin Dayot <edwin@greenpandagames.com>
 */

namespace App\Middlewares;

use Shorty\Framework\Middlewares\Contracts\RequestHandlerInterface;
use Shorty\Framework\Middlewares\Middleware;
use Shorty\Framework\Routing\Exceptions\HTTPException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AuthenticationMiddleware.
 */
class AuthenticationMiddleware extends Middleware
{
    /**
     * Process Authentication.
     *
     * @param \Psr\Http\Message\RequestInterface                       $request
     * @param \Shorty\Framework\Middlewares\Contracts\RequestHandlerInterface $handler
     *
     * @throws \Shorty\Framework\Routing\Exceptions\HTTPException
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(RequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        throw new HTTPException('Unauthorized', 401);
        return $handler->handle($request);
    }
}
