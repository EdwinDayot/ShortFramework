<?php
/**
 * PostController.php.
 *
 * @author   Edwin Dayot <edwin@greenpandagames.com>
 */

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

/**
 * Class PostController.
 */
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        dump('hello');
    }

    public function show(Request $request, $slug, $id)
    {
        dump($request, $slug, $id);
        die();
    }
}
