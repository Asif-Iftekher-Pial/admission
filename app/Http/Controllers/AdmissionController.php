<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admissionForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //dd($request->all());
         $request->validate([
            
            'fname'        =>  'required|string',
            'lname'        =>  'required|string',
            'dateofbirth'  =>  'required',
            'email'        =>  'required|email',
            'mobile'        =>  'required',
            'nid'           =>  'required',
            'gender'        =>  'required',
            'admissionclass'    =>  'required',
            'fathername'    =>  'required|string',
            'fatheroccupation'  =>  'required|string',
            'fnid'          =>  'required',
            'mothername'        =>  'required|string',
            'motheroccupation'      =>  'required|string',
            'mid'       =>  'required',
            'parentscontact'    =>  'required',
            'parentscontactsecond'      =>  'required',
            'paddress'          =>  'required|string',
            'parmanentaddress'  =>  'required',
            'health'    =>  'required',
            'studentpic'        =>  'required',
            'parentpic'     =>  'required',
        ]);

        //dd($request->all());
        $data = $request->all();

       
        // return $data;
        $status = Admission::create($data);  //create or storing data on  Table 

       

        if ($status) {
            //dd('ok');
            return redirect()->back()->with('success', ' Created successfully');
        } else {

            return redirect()->back()->with('error', 'Something went wrong');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
