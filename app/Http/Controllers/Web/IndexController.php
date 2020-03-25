<?php
/**
 * @Author    Little Bug
 * @CreatedAt 2020-03-25 15:30
 * @CreatedBy Phpstorm
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {


    }


    public function indexAction()
    {
        return view('web.index.index');
    }


}
