<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// admin
$router = app('router');

$router->namespace('\App\Http\Controllers\Admin')
       ->prefix('admin')
       ->middleware(['web'])
       ->group(function ($router) {
           $router->get("login", "LoginController@loginShowForm")->name("admin.login-show-form");
           $router->post("login", "LoginController@login")->name("admin.login")->middleware('throttle:20,1');

           $router->middleware(['auth:admin'])->group(function ($router) {
               $router->get("/", "IndexController@index")->name("admin.index");
               $router->get("logout", "LoginController@logout")->name("admin.logout");
               $router->get("change-password", "ChangePasswordController@changePasswordForm")->name("admin.change-password-form");
               $router->patch("change-password", "ChangePasswordController@changePassword")->name("admin.change-password");

               $router->middleware(['admin.permission'])->group(function ($router) {
                   $router->resource('role', 'RoleController');
                   $router->resource('permission', 'PermissionController');
                   $router->resource('admin-user', 'AdminUserController');
                   $router->resource('permission-group', 'PermissionGroupController');
                   $router->resource('navigation', 'NavigationController');
                   $router->get('admin-user/{id}/assign-roles', 'AdminUserController@assignRolesForm')->name('admin-user.assign-roles-form');
                   $router->put('admin-user/{id}/assign-roles', 'AdminUserController@assignRoles')->name('admin-user.assign-roles');
                   $router->get('role/{id}/assign-permissions', 'RoleController@assignPermissionsForm')->name('role.assign-permissions-form');
                   $router->put('role/{id}/assign-permissions', 'RoleController@assignPermissions')->name('role.assign-permissions');
               });
           });
       });


// index 自动路由
Route::get('/{controller}/{action}', function ($controller, $action) {
    $namespace = 'App\Http\Controllers\Web\\';
    $className = $namespace . ucfirst($controller . "Controller");
    $tempObj = new $className();
    return call_user_func(array($tempObj, $action . 'Action'));
});

