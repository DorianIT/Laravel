<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    public function index(){
        $data = People::get();
        //return $data;
        return view('people-list', compact('data'));
    }
    public function searchPeople(){
        $data = People::get();
        return view('people', compact('data'));
    }
    public function addPeople(){
        return view('add-people');
    }
    public function savePeople(Request $request){
       
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
        ]);

        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $country = $request->country;

        $stu = new People();
        $stu->name = $name;
        $stu->surname = $surname;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->address = $address;
        $stu->country = $country;
        $stu->save();

        return redirect()->back()->with('success','People added successfully',200);
        
    }
    public function editPeople($id){
        $data = People::where('id','=',$id)->first();
        return view('edit-people',compact('data'));
    }
    public function updatePeople(Request $request){
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $country = $request->country;

        People::where('id','=',$id)->update([
            'name'=>$name,
            'surname'=>$surname,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'country'=>$country,
        ]);
        return redirect()->back()->with('success','People updated successfully');
        
    }
    public function deletePeople($id){
        People::where('id','=',$id)->delete();
        return redirect()->back()->with('success','People deleted successfully');
    }
}
