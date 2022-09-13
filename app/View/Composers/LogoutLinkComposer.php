<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LogoutLinkComposer
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function compose(View $view)
    {
        $this->user ? $view->with('logout', "<a href={{route('logout')}}>Logout</a>") : '';
    }
}
