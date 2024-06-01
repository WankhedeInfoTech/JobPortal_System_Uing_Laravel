<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeConrtoller extends Controller
{
    public function Employer()
    {
        $data = DB::table('employer_reg')->where("Status", "=", "Confirm")->get();
        return view('Employer', ['data' => $data]);
    }
    public function JobSeeker()
    {
        $data1 = DB::table('jobseeker_reg')->where("Status", "=", "Confirm")->get();
        return view('JobSeeker', ['data1' => $data1]);
    }
    public function ContactUs()
    {

    }
    public function LatestNews()
    {

        $data2 = DB::table('news_master')->get();
        return view('LatestNews', ['data2' => $data2]);

    }

    public function RegisterEmployer(Request $req)
    {

        DB::table('employer_reg')->insert([

            "CompanyName" => $req->txtName,
            "ContactPerson" => $req->txtPerson,
            "Address" => $req->txtAddress,
            "City" => $req->txtCity,
            "Email" => $req->txtEmail,
            "Mobile" => $req->txtMobile,
            "Area_Work" => $req->txtAreaWork,
            "Status" => "Pending",
            "UserName" => $req->txtUserName,
            "Password" => $req->txtPassword,
            "Question" => $req->cmbQue,
            "Answer" => $req->txtAnswer

        ]);

        return redirect('/Employer');
    }

    public function RegisterJobSeeker(Request $req)
    {

        $JobSeekerName = $req->txtName;
        $Address = $req->txtAddress;
        $City = $req->txtCity;
        $Email = $req->txtEmail;
        $Mobile = $req->txtMobile;
        $Qualification = $req->txtQualification;
        $Gender = $req->cmbGender;
        $BirthDate = $req->txtBirthDate;
        $UserName = $req->txtUserName;
        $Password = $req->txtPassword;
        $Question = $req->cmbQue;
        $Answer = $req->txtAnswer;
        $basename = $req->txtFile->getClientOriginalName();
        $ext = $req->txtFile->getClientOriginalExtension();
        $newfilename = md5($basename) . rand(10, 100) . time() . "." . $ext;
        $req->txtFile->move(public_path("uploads"), $newfilename);

        DB::table('jobseeker_reg')->insert([

            "JobSeekerName" => $JobSeekerName,
            "Address" => $Address,
            "City" => $City,
            "Email" => $Email,
            "Mobile" => $Mobile,
            "Qualification" => $Qualification,
            "Gender" => $Gender,
            "BirthDate" => $BirthDate,
            "Resume" => $newfilename,
            "Status" => "Pending",
            "UserName" => $UserName,
            "Password" => $Password,
            "Question" => $Question,
            "Answer" => $Answer,
        ]);
        return redirect('/JobSeeker');

    }

    public function EmployerLogin(Request $req)
    {
        $username = $req->username;
        $password = $req->password;
        $data = DB::table('employer_reg')->where('UserName', $username)->where('Password', $password)->where('Status', 'Confirm')->get();
        if (count($data) <= 0) {
            return redirect("/EmployerLogin");
        } else {
            $record = $data[0];
            $req->session()->put("EmployerID", $record->EmployerId);
            $req->session()->put("EmployerName", $record->UserName);
            $req->session()->put('CompanyName', $record->CompanyName);

            return redirect('/EnterEmployer');
        }
    }
    public function Profile($id)
    {
        $data3 = DB::table('employer_reg')->where('EmployerId', $id)->get();
        $r = $data3[0];
        return view('Employer/Profile', ['data' => $r]);
    }

    public function EditProfile($id)
    {
        $data3 = DB::table('employer_reg')->where('EmployerId', $id)->get();
        $r = $data3[0];
        return view('Employer/EditProfile', ['data' => $r]);
    }
    public function UpdateProfile(Request $request)
    {

        $txtId = $request->txtId;
        $txtName = $request->txtName;
        $txtContact = $request->txtContact;
        $txtAddress = $request->txtAddress;
        $txtCity = $request->txtCity;
        $txtEmail = $request->txtEmail;
        $txtMobile = $request->txtMobile;
        $txtArea = $request->txtArea;
        $txtUser = $request->txtUser;
        $txtPassword = $request->txtPassword;

        DB::table('employer_reg')->where('EmployerId', $txtId)->update([

            "CompanyName" => $txtName,
            "ContactPerson" => $txtContact,
            "Address" => $txtAddress,
            "City" => $txtCity,
            "Email" => $txtEmail,
            "Mobile" => $txtMobile,
            "Area_Work" => $txtArea,
            "UserName" => $txtUser,
            "Password" => $txtPassword
        ]);

        return view('Employer/index');
    }
    public function Managejob($CompanyName){
        $data3 = DB::table('job_master')->where('CompanyName', $CompanyName)->get();
        $data = DB::table('job_master')->where('CompanyName', $CompanyName)->count();
        return view('Employer/ManageJob', ['JobRecord' => $data3,'total' => $data]);
        
    }
    public function DeleteJob($id){
        DB::table('job_master')->where('JobId', $id)->delete();
        return redirect('/EnterEmployer');
    }
    public function InsertJob(Request $request,$CompanyName){

        $txtTitle=$request->txtTitle;
        $txtTotal=$request->txtTotal;
        $cmbQual=$request->cmbQual;
        $txtDesc=$request->txtDesc;

        DB::table('job_master')->insert([

            "CompanyName"=>$CompanyName,
            "JobTitle"=>$txtTitle,
            "Vacancy"=>$txtTotal,
            "MinQualification"=>$cmbQual,
            "Description"=>$txtDesc
        ]);

        return redirect('/EnterEmployer');
  
    }
    public function ManageWalkin($CompanyName){
        $data3 = DB::table('walkin_master')->where('CompanyName', $CompanyName)->get();
        $data = DB::table('walkin_master')->where('CompanyName', $CompanyName)->count();
        return view('Employer/ManageWalkin', ['WalkRecord' => $data3,'total' => $data]);
        
    }
    public function DeleteWalkin($id){
        DB::table('walkin_master')->where('WalkInId', $id)->delete();
        return redirect('/EnterEmployer');
    }
    public function InsertWalkin(Request $request,$CompanyName){
 
        $txtTitle=$request->txtTitle;
        $txtTotal=$request->txtTotal;
        $cmbQual=$request->cmbQual;
        $txtDesc=$request->txtDesc;
        $txtDate=$request->txtDate;
        $txtTime=$request->txtTime;

        DB::table('walkin_master')->insert([

            "CompanyName"=>$CompanyName,
            "JobTitle"=> $txtTitle,
            "Vacancy"=>$txtTotal,
            "MinQualification"=>$cmbQual,
            "Description"=>$txtDesc,
            "InterviewDate"=>$txtDate,
            "InterviewTime"=>$txtTime
                       
        ]);

        return redirect('/EnterEmployer');
  
    }
    public function Application(Request $req,$id,$CompanyName)
    {

          $data5 = DB::table('job_master')->select('JobId','JobTitle')->where('CompanyName',$CompanyName)->get();
          $data6 = count($data5);
          return view('Employer/Application', ['JobRecord' => $data5,'total' => $data6]);
    }
    public function Application2(Request $req){

        $JobTitle = $req->cmbTitle;
    
        $data7 = DB::table('application_master')->join('jobseeker_reg','jobseeker_reg.JobSeekId','=','application_master.JobSeekId')->select('application_master.ApplicationId','application_master.Status','jobseeker_reg.JobSeekerName','jobseeker_reg.City','jobseeker_reg.Email','jobseeker_reg.JobSeekId','application_master.JobId')->where('application_master.JobId','=',$JobTitle)->get();

        $data8 = count($data7);
        return view('Employer/Application2', ['JobRecord' => $data7,'total' => $data8, 'JobTitle' => $JobTitle]);

    }
    public function ViewBiodata($JobSeekId,$ApplicationId,$JobId,$Status){

        $JobSeeker =  DB::table('JobSeeker_Reg')->where('JobSeekId',$JobSeekId)->get();
        $JobSeeker1 =  DB::table('JobSeeker_Education')->where('JobSeekId',$JobSeekId)->get();
        $data10 = count($JobSeeker1);
        return view('Employer/ViewBiodata', ['JobRecord1' => $JobSeeker,'JobRecord2' => $JobSeeker1,'total' => $data10,'Status' => $Status,'JobSeekId' => $JobSeekId,'JobId' => $JobId,'ApplicationId' => $ApplicationId]);

    }

    public function CallLatter(Request $req,$JobId,$JobSeekId,$ApplicationId){

        $info = $req->txtDesc;
        
        $data11 = DB::table('application_master')->where('ApplicationId',$ApplicationId)->where('JobSeekId',$JobSeekId)->where('JobId',$JobId)->update([
            "Status" => "Call Later Send",
            "Description" => $info
        ]);
        
        return redirect('Application2');
        
    }
    public function logout(){
        session()->flush();
        return redirect('/');
    }

}