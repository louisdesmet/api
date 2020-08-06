<?php

namespace App\Http\Controllers;

use App\Outcome;
use App\Http\Resources\Outcome as OutcomeRes;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index()
    {
        return OutcomeRes::collection(Outcome::all());
    }
    
    /**
     * @param Request  $request
     */
    public function store(Request $request)
    {
        $subject = new Outcome;
        $subject->name = $request->input('name');
        $subject->description = $request->input('description');
        $subject->save();
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
