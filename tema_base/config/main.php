<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'AquaBlue - CMS Admin Theme',
    // preloading 'log' component
    'preload' => array(
        'less',
        'bootstrap',
        'log',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
// uncomment the following to enable the Gii tool
        /*
          'gii'=>array(
          'class'=>'system.gii.GiiModule',
          'password'=>'Enter Your Password Here',
          // If removed, Gii defaults to localhost only. Edit carefully to taste.
          'ipFilters'=>array('127.0.0.1','::1'),
          ),
         */
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'ppp',
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
    // application components
    'components' => array(
        'less' => array(
            'class' => 'ext.less.components.LessCompiler',
            'forceCompile' => false, // indicates whether to force compiling
            'paths' => array(
                'less/style.less' => 'css/style.css',
            ),
        ),
        'user' => array(
// enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
            'coreCss' => false,
            'yiiCss' => false,
            'responsiveCss' => false,
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),
        // uncomment the following to use a MySQL database
        /*
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=testdrive',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '',
          'charset' => 'utf8',
          ),
         */
        'errorHandler' => array(
// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
// this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);