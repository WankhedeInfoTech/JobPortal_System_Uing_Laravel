<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminLogin(Request $request){

        $username = $request->username;
        $password = $request->password;
        $data = DB::table('user_master')->where('UserName', $username)->where('Password', $password)->get();
        if (count($data) <= 0) {
            return redirect("/adminLogin");
        } else {
            $record = $data[0];
            $request->session()->put("UserName", $record->UserName);
            return redirect('/EnterAdmin');
        }
    }

    public function User(){
        $data = DB::table('User_Master')->get();
        return view('Admin/User',['data' => $data]);
    }

    public function InsertUser(Request $req){
        $UserName = $req->txtUserName;
        $Password = $req->txtPassword;

        DB::table('User_Master')->insert([
            "UserName" => $UserName,
            "Password" => $Password
        ]);
        return redirect('User');
    }

    public function DeleteUser($id){
        DB::table('User_Master')->where('UserId',$id)->delete();
        return redirect('User');
    }

    public function ManageJob(){
        $data = DB::table('JobSeeker_Reg')->where('Status','Pending')->get();
        $total = count($data);

        return view('Admin/ManageJob',['data'=>$data,'data1'=>$total]);

    }

    public function DetailJob($JobId){

        $data = DB::table('JobSeeker_Reg')->where('JobSeekId',$JobId)->get();
        
        return view('Admin/DetailJob',['data'=>$data]);
    }
    
    public function ApprovJob($JobId){
        
        DB::table('JobSeeker_Reg')->where('JobSeekId',$JobId)->update([
            'Status'=>'Confirm'
        ]);
        return redirect('ManageJob');
    }
    
    public function ManageEmployer(){
        
        $data2 = DB::table('employer_reg')->where('Status','Pending')->get();
        $total2 = count($data2);
        
        return view('Admin/ManageEmployer',['data2'=>$data2,'data3'=>$total2]);
    }
    
    public function DetailEmp($EmpId){
        
        $data = DB::table('employer_reg')->where('EmployerId',$EmpId)->get();
        
        return view('Admin/DetailEmp',['data'=>$data]);
    }
    public function ApprovEmp($EmpId){
        
        DB::table('employer_reg')->where('EmployerId',$EmpId)->update([
            'Status'=>'Confirm'
        ]);
        return redirect('ManageEmployer');
    }

    public function News(){
        $news = DB::table('news_master')->get();
        return view('Admin/News',['news'=>$news]);
    }
    public function DeleteNews($NewsId){
        DB::table('news_master')->where('NewsId',$NewsId)->delete();
        return redirect('News');
    }

    public function UploadNews(Request $req){
        $news = $req->txtNews;
        $date = $req->txtDate;

        DB::table('news_master')->insert([
            "News"=>$news,
            "NewsDate"=>$date
        ]);
        return redirect('News');
    }
    public function Feedback(){
        $feed = DB::table('Feedback')->select('FeedbackId','Feedback','FeedbakDate','JobSeekerName')->join('JobSeeker_Reg','Feedback.JobSeekId','=','JobSeeker_Reg.JobSeekId')->get();
        $total = count($feed);
        return view('Admin/Feedback',['feed'=>$feed,'total'=>$total]);
    }
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
