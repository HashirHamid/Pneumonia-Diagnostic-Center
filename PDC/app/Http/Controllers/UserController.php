<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Validator;
use Hash; 
use Session;

class UserController extends Controller
{
    public function login(){
        return view('userProfile/login');
    }

    public function loginUser(Request $request){
        $in = array(
            'email'=>'required|email',
            'password'=>'required|min:8|max:20'
        );

        $validator = Validator::make($request->input(),$in);

        if($validator -> fails()){
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $User = user::where('email', '=', $request->email)->first();
            if($User){
                if(Hash::check($request->password,$User->password)){
                    $request->session()->put('loginId', $User->id);
                    $request->session()->put('type', $User->type);
                    return redirect('/patientRecord');
                }else{
                    return response()->json(['status'=>0,'error'=>['password'=>'Incorrect Password!']]);
                }
            }else{
                return response()->json(['status'=>0,'error'=>['email'=>'This email is not registered!']]);
            }
        }
    }
    public function patientRecord(){
        $data = array();
        if(Session::has('loginId')){
            $data = user::where('id', '=', Session::get('loginId'))->first();
        }
        if(Session::has('type')){
            $data = user::where('type', '=', Session::get('type'))->first();
        }
        $patients = DB::select("select * from patientdetails");
        return view('app/patientRecord',compact('patients'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
    }

    public function signup(){
        return view('userProfile/signup');
    }

    public function save(Request $request){

        $in = array(
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20',
        );

        $validator = Validator::make($request->input(),$in);

        if($validator -> fails()){
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $name=$request->input('name');
            $email=$request->input('email');
            $password=Hash::make($request->input('password'));

            $query = DB::unprepared("insert into users(name, email, password, type) values ('$name', '$email', '$password','0')");
           if($query){
                return response()->json(['status'=>1, 'msg'=>'New User has been successfully registered']);
           }
        }
    }
    
    

    public function home(){
        return view('home');
    }

    public function patientDetails(){
        return view('app/patientDetails');
    }


    public function diagnosis(){
        return view('app/patientDetails');
    }


    public function addPatient(Request $request){

        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $vacc = $request->input('vaccination');
        $cov = $request->input('covid');
        $sym = $request->input('symptoms');
        $breath = $request->input('breath');
        $comments = $request->input('comments');
        
        DB::unprepared("insert into patientdetails (name, age, gender, vaccination, covid, symptoms, breath, comments) values ('$name','$age','$gender','$vacc','$cov','$sym', '$breath', '$comments')");
        return view('app/diagnosis');
    }

    public function readPatients(){
        $patients = DB::select("select * from patientdetails");
        return view('app/patientRecord',compact('patients'));
    }

    public function deletePatient($id){
        DB::unprepared("delete from patientdetails where userId = '$id'");
        return redirect('/patientRecord');
    }

    public function updatePatient($id) {
        $patient = DB::select("select * from patientdetails where userId = ?",[$id]);
        return view('/app/patientDetailsUpdate',compact('patient'));
        }

    public function display(Request $request, $id){
        
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $vacc = $request->input('vaccination');
        $cov = $request->input('covid');
        $sym = $request->input('symptoms');
        $breath = $request->input('breath');
        $comments = $request->input('comments');
        
        
        DB::update("update patientdetails set name=?, age=?, gender=?, 
        vaccination=?, covid=?, symptoms=?, breath=?, comments=? where userId = ?",
        [$name, $age, $gender, $vacc, $cov, $sym, $breath, $comments, $id]);
        return redirect('/patientRecord');
    }

    public function upload(Request $request){

        $image = $request->input('filename');

        DB::update("update patientdetails set picture=? order by userId desc limit 1",
        [$image]);

        return view('app/refresh');
    }

    public function submit(){

    }

    public function report(){
        $pat = DB::select("select * from patientdetails order by userId desc limit 1");
        return view('app/report',compact('pat'));
    } 

}
