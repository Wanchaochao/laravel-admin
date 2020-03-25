<?php

namespace App\ViewComposers;


use Illuminate\View\View;
use App\Traits\View\NavigationTree;

class AdminComposer
{
    use NavigationTree;

    public function compose(View $view)
    {
        $view->with("navigation", $this->permissionNavigationTree());
    }
}
