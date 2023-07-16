<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use Backend\Client\Api\OrganizationResourceApi;

class HomeController extends Controller
{
    //
    public function index(){
        
        $user = new User();
        $user->id = 1506;
        $user->name = 'Paulo Borges';
        $user->country = 'Cabo Verde';

        return Inertia::render('Home', [
            'title' => 'Home Page',
            'name' => '',
            'user' => $user
        ]);

    }
}

class User {

    public int $id;
    public string $country;
    public string $name;
}