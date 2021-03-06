<?php

namespace @@FQMN@@;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\View;
//use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\ModuleDefinitionInterface;
@@iniConfigImport@@
@@useConfig@@

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers an autoloader related to the module
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            '@@FQMN@@\Controllers' => __DIR__ . '/controllers/',
            '@@FQMN@@\Models'      => __DIR__ . '/models/',
            '@@FQMN@@\Services'      => __DIR__ . '/services/'
        ]);

        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        /**
         * Setting up the view component
         */
        /*
        $di->set('view', function () {
            $view = new View();
            $view->setDI($this);
            $view->setViewsDir(__DIR__ . '/views/'); 

            $view->registerEngines([
                '.volt'  => 'voltShared',
                '.phtml' => PhpEngine::class
                ]);                                  

            return $view;                            
        });                                          
        */
    }
}
