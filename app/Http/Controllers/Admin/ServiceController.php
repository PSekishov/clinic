<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service;
use App\Doctor;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $doctor_id = Doctor::all()->pluck('nameDoc','id');
        $service = new Service();
        return view('admin.service.create',compact('service','doctor_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->serv = $request->serv;
        $service->priceServ = $request->priceServ;
        $service->description = $request->description;
        $service->imgPath = $request->filepath;
        $service->save();

        $service->doctors()->sync($request->doctor_id);   
        return redirect('/admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $doctor_id = Doctor::all()->pluck('nameDoc','id');
        $service = Service::find($id);
        return view('admin.service.edit',compact('service','doctor_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor_id = Doctor::all()->pluck('nameDoc','id');
        $service = Service::find($id);
        $service->serv = $request->serv;
        $service->priceServ = $request->priceServ;
        $service->description = $request->description;
        $service->imgPath = $request->filepath;
        $service->save();

        $service->doctors()->sync($request->doctor_id);   
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
    }



} // end class Service

