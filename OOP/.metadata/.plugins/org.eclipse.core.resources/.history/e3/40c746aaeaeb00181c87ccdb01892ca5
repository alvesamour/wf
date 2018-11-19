<?php
namespace MicroForce\Kernel;

use Symfony\Component\Routing\RouteCollection;
use MicroForce\Controller\HomepageController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class Kernel
{
    
    public function start() : string
    {
        // Execute routing
        $routeDefinition = $this->executeRouting();
        // If we can math a controller
        if ($routeDefinition !== null) {
            // Load the controller
            $controllerName = $routeDefinition['_controller'];
            $controller = new $controllerName();
            // Call the controller method
            $method = $routeDefinition['_method'];
            return $controller->$method();
        }

        return '404';
    }
    
    private function executeRouting() : ?array
    {
        // Load routing informations
        $collection = $this->loadRouting();
        
        // Try to match a route
        try {
            $context = new RequestContext();
            $context->fromRequest(Request::createFromGlobals());
            
            $matcher = new UrlMatcher($collection, $context);
            return $matcher->match($context->getPathInfo());
            // Return the route definition
        } catch (\Exception $e) {
            // Catch exception
            // Return null
            return null;
        }
    }

    private function loadRouting() : RouteCollection
    {
        // Create each routes
        $homepage = new Route(
            '/',
            [
                '_controller' => HomepageController::class,
                '_method' => 'homepage'
            ]
            );
        // Add them to the route collection
        $collection = new RouteCollection();
        $collection->add('homepage', $homepage);
        // return the collection
        return $collection;
    }
    
}
