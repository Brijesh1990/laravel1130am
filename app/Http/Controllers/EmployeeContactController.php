<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\EmployeeContact;
class EmployeeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // apply form validations
         $request->validate([
               "name"=>"required",
               "email"=>"required",
               "phone"=>"required",
               "subject"=>"required",
               "message"=>"required",
         ]);
        // store data in contact us
        $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "subject"=>$request->subject,
            "message"=>$request->message,
        );
        // Elequent query builder
        EmployeeContact::create($data);
        return redirect('contactus')->with('success','Thanks for contact with us Our one of admin will contact with you Soon!');

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
