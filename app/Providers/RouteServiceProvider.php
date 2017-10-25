<?php
/**
 * RouteServiceProvider.php.
 *
 * @author   Edwin Dayot <edwin@greenpandagames.com>
 */

namespace App\Providers;

use Shorty\Framework\Provider\ServiceProvider;
use Shorty\Framework\Routing\Router;

/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Router object.
     *
     * @var \Shorty\Framework\Routing\Router
     */
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Boot service provider.
     */
    public function boot(): void
    {
        $this->mapAPIRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Register API routes grouped by prefix and middleware.
     */
    private function mapAPIRoutes(): void
    {
        $route = $this->router;
        require __DIR__ . '/../../routes/api.php';
    }

    /**
     * Register web routes grouped by middleware.
     */
    private function mapWebRoutes(): void
    {
        $route = $this->router;
        require __DIR__ . '/../../routes/web.php';
    }
}
