<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubjectCategory as SubjectCategoryRes;
use App\SubjectCategory;
use Illuminate\Http\Request;

class SubjectCategoryController extends Controller
{
    public function index()
    {
        return SubjectCategoryRes::collection(SubjectCategory::with('subjects', 'subjects.category')->get());
    }
    
    /**
     * @param Request  $request
     */
    public function store(Request $request)
    {
        $subject = new SubjectCategory;
        $subject->name = $request->input('name');
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
