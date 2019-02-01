<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ProjectsController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordProjectsController extends ProjectsController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset ProjectsController
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
