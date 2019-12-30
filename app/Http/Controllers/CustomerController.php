<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as CustomerRes;

class CustomerController extends Controller
{
    public function index()
    {
        return CustomerRes::collection(Customer::all());
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
