<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $http = new Client();
        $response = $http->post('http://api.test/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'QGQ5XWjMsCtgpRxCrg0hcRlTndGGlpYOe0t7MdnX',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
}
