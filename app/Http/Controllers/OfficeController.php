<?php

namespace App\Http\Controllers;

use App\Office;
use App\Http\Resources\Office as OfficeRes;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        return OfficeRes::collection(Office::with('location')->get());
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
