<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class OrgsController extends Controller
{

    /**
     * Get  Backend REST client
     * 
     * @return \Backend\Client\Api\OrganizationResourceApi
     */
    private function getRestClient() {
        $config = \Backend\Client\Configuration::getDefaultConfiguration();
        //->setUsername(NEXMO_API_KEY)
        //->setPassword(NEXMO_API_SECRET);

       // $_ENV['APP_BACKEND_HOST'];
        $host = env('BACKEND_HOST', 'localhost:8080');
        env('BACKEND_API_TOKEN', '');

        $config->setHost($host);

        $client = new \Backend\Client\Api\OrganizationResourceApi(new \GuzzleHttp\Client(), $config);

        return $client;
    }
    //
    public function index(){

        $client =  $this->getRestClient() ;

        $result = $client->getAll();

        return Inertia::render('Orgs/List', [
            'title' => 'Organizations',
            'orgs' => $result->getItems()
        ]);
    }

    public function create(){

        return Inertia::render('Orgs/Create', [
            'title' => 'Create new organization',
            'name' => ''
        ]);
    }

    public function save(Request $request){

        //if not validate redirect to orgs.create
        $request->validate([
            'org_name' => 'required|string|max:100',
            'org_country' => 'required|string|max:100',
        ]);

        $data = [
            'name' =>$request->input('org_name'),
            'country' => $request->input('org_country')
        ];

        $organization = new \Backend\Client\Model\Organization($data);

        $client =  $this->getRestClient();

        $client->create($organization);

        //return Inertia::location('/');
  
        //return to_route('orgs/index');

       // return Redirect::route('/orgs/index');

       //return redirect()->back()->with('success_message', 'Sucessfull saved');

       return Redirect::to('/orgs')->with('success_message', 'Sucessfull saved');
    }
}