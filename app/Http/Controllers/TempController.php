<?php

namespace App\Http\Controllers;
use App\Models\temp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TempController extends Controller
{
    public function index(){
        return view('index');
    }

    public function input(){
        return view('input');
    }

    public function showdata(){
        // $temp = Temp::all();
        $temp = Temp::orderBy('temp_no', 'DESC')->get();
        $results = DB::select( DB::raw("SELECT AVG(temp_no) as avg FROM temps"));
        $results = $results[0];
        // dd($results);
        return view('showdata',compact('temp','results'));
        
    }


    public function insert(Request $request){
        $temp_str = "";
        if($request->temp_no > 37.5){
            $temp_str = "High";
        }
        else if($request->temp_no < 35.0){
            $temp_str = "Low";
        } else $temp_str = $request->temp_no;

        // dd($request->studentId,$request->temp_no,$temp_str);

        $temp = new Temp;
        $temp->studentId = $request->studentId; 
        $temp->temp_no = $request->temp_no; 
        $temp->temp_str = $temp_str; 
        $temp->save();
        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }
}
