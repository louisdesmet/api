<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Resources\Appointment as AppointmentRes;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return AppointmentRes::collection(Appointment::with('subject', 'customer')->get());
    }
    
    /**
     * @param Request  $request
     */
    public function store(Request $request)
    {
        $appointment = new Appointment;
        $appointment->meeting_type = $request->input('meetingType');
        $appointment->start = $request->input('start');
        $appointment->end = $request->input('end');
        $appointment->subject()->associate($request->input('subject'));
        $appointment->office()->associate($request->input('office'));
        $appointment->customer()->associate($request->input('customer'));
        $appointment->contact()->associate($request->input('contact'));
        $appointment->save();
        
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
