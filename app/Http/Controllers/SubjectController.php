<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Http\Resources\Subject as SubjectRes;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return SubjectRes::collection(Subject::with('category')->get());
    }
    
    /**
     * @param Request  $request
     */
    public function store(Request $request)
    {
        $subject = new Subject;
        $subject->name = $request->input('name');
        $subject->description = $request->input('description');
        $subject->category()->associate($request->input('category'));
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
