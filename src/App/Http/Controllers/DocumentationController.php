<?php

namespace Yk\LaravelApiDocumentation\App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$routes = array_filter(collect(Route::getRoutes())->toArray(), function ($route) {
    		return starts_with($route->uri, 'api') AND $route->uri !== 'api';
    	});

        $examples = [
            'php',
            'curl',
        ];

    	return view('Yk\LaravelApiDocumentation::documentation.index', compact('routes', 'examples'));
    }
}
