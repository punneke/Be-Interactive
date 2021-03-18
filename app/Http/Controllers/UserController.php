<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Return the signed URL of the specified user
     *
     * @param  int  $id
     * @return View
     */
    public function getSignedUrl($id)
    {
        echo URL::signedRoute('register', ['user' => $email]);
    }
}
