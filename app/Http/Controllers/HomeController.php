<?php
/**
 * HomeController.php.
 *
 * @author   Edwin Dayot <edwin@greenpandagames.com>
 */

namespace App\Http\Controllers;

use App\Models\ModelExample;
use GuzzleHttp\Psr7\Request;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * modelExample.
     *
     * @var \App\Models\ModelExample
     */
    private $modelExample;

    /**
     * HomeController constructor.
     *
     * @param \App\Models\ModelExample $modelExample
     */
    public function __construct(ModelExample $modelExample)
    {
        $this->modelExample = $modelExample;
    }

    public function index(Request $request)
    {
        dump($this->modelExample, $request);
    }
}
