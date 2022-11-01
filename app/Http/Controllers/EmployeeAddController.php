<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.content');
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
      // apply form validations
      $request->validate([
        "firstname"=>"required",
        "lastname"=>"required",
        "email"=>"required",
        "mobile"=>"required",
        "gender"=>"required",
        "address"=>"required",
  ]);
 // store data in contact us
 $data=array(
     "firstname"=>$request->firstname,
     "lastname"=>$request->lastname,
     "email"=>$request->email,
     "mobile"=>$request->mobile,
     "gender"=>$request->gender,
     "address"=>$request->address,
 );
 // Elequent query builder
 Employee::create($data);
 return redirect('/')->with('success','Employee Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //fetch all data or show all data
        $data=Employee::all();
        //dd($data);
        return view('employee/content',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //edit data
         $ed=Employee::where("id",$id)->first();
         //dd($id);
         return view('employee/editemployeedata',["ed"=>$ed]);
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
        //update data
       
        $data=array(
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email,
            "mobile"=>$request->mobile,
            "gender"=>$request->gender,
            "address"=>$request->address,
        );
        Employee::where("id",$id)->update($data);
        //dd($id);
        return redirect('/')->with('upd','Your data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //delete data
         Employee::where("id",$id)->delete();
         //dd($id);
         return redirect('/')->with('del','Your data successfully deleted');
    }
}
