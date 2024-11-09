<?php

/*
|--------------------------------------------------------------------------
| Configuration - Constants and Variables
|--------------------------------------------------------------------------
*/
$ini = parse_ini_file(__DIR__ . '/../config.ini');

define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('CONF', __DIR__.'/../config.ini' );
// define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN .'/');
define("APP", $ini['app']);
define('DB_DRIVER', $ini['db_driver']); // Sample database name
define('DB_HOST', $ini['db_host']); // Sample database name
define('DB_NAME', $ini['db_name']); // Sample database name
define('DB_USER',  $ini['db_user']); // Sample database username
define('DB_PASS', $ini['db_pass']); // Sample database password
define('DB_PREFIX', $ini['db_prefix']); // Sample database prefix

define('PASS_PHRASE', 'https://open-nis.org/api/encryption'); // Passphrase or KEK API URL
define('AUTH_TOKEN', 'encv1.VWZUSXNEUVdQVmlPbnVVTVRDZkxibC9aM3YwT21raVhpdXRBNGZoR1dsUjllUT09.iJPEzvBUYueIhg0c8VD5Ag==.a1ycb+X3teBNAlAjQAQe/w=='); // Authorization Bearer token

/*
|--------------------------------------------------------------------------
| Load BasicPHP Class Library
|--------------------------------------------------------------------------
*/


require_once __DIR__ . '/../Basic.php';
require_once __DIR__ . '/functions.php';


/*
|--------------------------------------------------------------------------
| Middleware
|--------------------------------------------------------------------------
*/

Basic::capsulate();

Basic::setErrorReporting(true); // Error reporting
// Basic::setJsonBodyAsPOST(); // JSON as $_POST
// Basic::setFirewall(); // Enable firewall
// Basic::setHttps(); // Require TLS/HTTPS

// setcookie('token', Basic::encrypt('{"username":"user","role":"admin"}', PASS_PHRASE), NULL, NULL, NULL, NULL, TRUE); // Sample token
// var_dump(json_decode(Basic::decrypt($_COOKIE['token'], PASS_PHRASE), TRUE));

Basic::setAutoloadClass(['classes', 'models', 'views', 'controllers']); // Autoload folders
Basic::setAutoRoute(); // Automatic '/class/method' routing


/*
|--------------------------------------------------------------------------
| Endpoint Routes
|--------------------------------------------------------------------------
*/

Basic::route('GET', '/', function()  {  // Set homepage
    // echo base_url_no();
    header('Location: ' . base_url() . 'home');
    // $page_title = 'Dashboard';
    // Basic::view('home', compact('page_title'));
});

Basic::route('GET', '/chart', function()  {
    $chart = new ChartAllController("stock");
    $chart->index();
});

Basic::route('GET', '/chart/stock', function()  {
    $chart = new ChartAllController("stock");
    $chart->index();
});

Basic::route('GET', '/chart/stock_in', function()  {
    $chart = new ChartAllController("stock_in");
    $chart->index();
});

Basic::route('GET', '/chart/stock_out', function()  {
    $chart = new ChartAllController("stock_out");
    $chart->index();
});

Basic::route('GET', '/chart_all', function()  {
    $chart = new ChartAllController("stock");
    $chart->list_all();
});

Basic::route('GET', '/pdf', function()  {
    $stock = new StockAllController("stock");
    $stock->pdf('stock');
});

Basic::route('GET', '/stock', function()  {
    $stock = new StockAllController("stock");
    $stock->index();
});

Basic::route('GET', '/stock_all', function()  {
    $stock = new StockAllController("stock");
    $stock->list_all();
});

Basic::route('GET', '/stock/new', function()  {
    $stock = new StockAllController("stock");
    $stock->new();
});

Basic::route('GET', '/stock/in', function()  {
    $stock = new StockAllController("stock");
    $stock->in();
});

Basic::route('GET', '/stock/out', function()  {
    $stock = new StockAllController("stock");
    $stock->out();
});

Basic::route('GET', '/stock/new_multi', function()  {
    $stock = new StockAllController("stock");
    $stock->new_multi();
});

Basic::route('POST', '/stock/save', function()  {
    $stock = new StockAllController("stock");
    $stock->save();
});

Basic::route('GET', '/stock/delete/(:any)/(:num)/(:num)/(:num)', function()  {
    $stock = new StockAllController("stock");
    $stock->delete(uri(3), uri(4), uri(5), uri(6));
});


Basic::route('POST', '/stock/save_multi', function()  {
    $stock = new StockAllController("stock");
    $stock->save_multi();
});

Basic::route('GET', '/stock_in', function()  {
    $stock = new StockAllController("stock_in");
    $stock->index();
});

Basic::route('GET', '/stock_out', function()  {
    $stock = new StockAllController("stock_out");
    $stock->index();
});

Basic::route('GET', '/stock/edit/(:any)', function()  {
    $stock = new StockAllController("stock");
    $stock->edit_item(uri(3));
});

Basic::route('GET', '/stock_in/edit/(:num)', function()  {
    $stock = new StockAllController("stock_in");
    $stock->edit();
});

Basic::route('GET', '/stock_out/edit/(:num)', function()  {
    $stock = new StockAllController("stock_out");
    $stock->edit();
});

Basic::route('POST', '/stock/update/(:any)', function()  {
    $stock = new StockAllController(uri(3));
    $stock->update();
});

Basic::route('GET', '/logout', function()  {
    $auth = new AuthController;
    $auth->logout();
});


/*
|--------------------------------------------------------------------------
| Handle Error 404 - Page Not Found - Invalid URI
|--------------------------------------------------------------------------
*/

Basic::apiResponse(404); // Not Found
