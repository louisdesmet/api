<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\Contact as ContactRes;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return ContactRes::collection(Contact::with('user', 'roles', 'offices', 'offices.location')->get());
    }
    
    /**
     * @param Request  $request
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * @param  int  $id
     */
    public function show($id)
    {
        //
    }
    
    /**
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * @param  Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }
}
