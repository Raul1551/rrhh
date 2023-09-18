<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

//PERSONAL
// Index Personal
Router::connect('/personals', array('controller' => 'personals', 'action' => 'index'));
// Ruta ver
Router::connect('/personals/view/:id', array('controller' => 'personals', 'action' => 'view'), array('pass' => array('id')));
// Ruta añadir
Router::connect('/personals/add', array('controller' => 'personals', 'action' => 'add'));
// Ruta editar
Router::connect('/personals/edit/:id', array('controller' => 'personals', 'action' => 'edit'), array('pass' => array('id')));
// Ruta delete
Router::connect('/personals/delete/:id', array('controller' => 'personals', 'action' => 'delete'), array('pass' => array('id'), 'id' => '[0-9]+'));

// TALLAS
// Index Tallas
Router::connect('/tallas', array('controller' => 'tallas', 'action' => 'index'));
// Add Tallas
Router::connect('/tallas/add', array('controller' => 'tallas', 'action' => 'add'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
