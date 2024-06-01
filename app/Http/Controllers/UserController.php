<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function JobSeekerLogin(Request $req)
    {
        $username = $req->username;
        $password = $req->password;
        $data = DB::table('jobseeker_reg')->where('UserName', $username)->where('Password', $password)->where('Status', 'Confirm')->get();
        if (count($data) <= 0) {
            return redirect("/JobSeekerLogin");
        } else {
            $record = $data[0];
            $req->session()->put("JobSeekerName", $record->UserName);
            $req->session()->put("ID1", $record->JobSeekId);
            $req->session()->put('Name', $record->JobSeekerName);

            return redirect('/EnterJobSeeker');
        }
    }

    public function Profile($id){

        $data = DB::table('jobseeker_reg')->where('JobSeekId',$id)->get();
        return view('JobSeeker/Profile',['data'=>$data]);

    }
    public function EditProfile($id)
    {
        $data3 = DB::table('jobseeker_reg')->where('JobSeekId', $id)->get();
        $r = $data3[0];
        return view('JobSeeker/EditProfile', ['data' => $r]);
    }
    public function UpdateProfile(Request $req)
    {
        $jobId = $req->ID1;
        $JobSeekerName = $req->txtName;
        $Address = $req->txtAddress;
        $City = $req->txtCity;
        $Email = $req->txtEmail;
        $Mobile = $req->txtMobile;
        $Qualification = $req->txtQualification;
        $BirthDate = $req->txtBirthDate;
        $UserName = $req->txtUserName;
        $Password = $req->txtPassword;
        $old_img = $req->old_image;

        if ($req->hasFile('pimage')) {
            $basename = $req->pimage->getClientOriginalName();
            $ext = $req->pimage->getClientOriginalExtension();
            $newfilename = md5($basename) . rand(10, 100) . time() . "." . $ext;
            $req->pimage->move(public_path("uploads"), $newfilename);
        } else {
            $newfilename = $old_img;
        }

        DB::table('jobseeker_reg')->where('JobSeekId',$jobId)->update([

            "JobSeekerName" => $JobSeekerName,
            "Address" => $Address,
            "City" => $City,
            "Email" => $Email,
            "Mobile" => $Mobile,
            "Qualification" => $Qualification,        
            "BirthDate" => $BirthDate,
            "Resume" => $newfilename,
            "Status" => "Pending",
            "UserName" => $UserName,
            "Password" => $Password,
        ]);

        return view('JobSeeker/index');
    }
 
    public function Education($id){

        $data = DB::table('jobseeker_education')->where('JobSeekId',$id)->get();
        $total =  count($data);

        return view('JobSeeker/Education',['data'=>$data,'total'=>$total]);        
       
    }

    public function InsertEducation(Request $request,$id){
              
        $Degree = $request->cmbQual;
        $Uni = $request->txtBoard;
        $Passing = $request->cmbYear;
        $Per = $request->txtPer;

        DB::table('JobSeeker_Education')->insert([

            "JobSeekId"=>$id,
            "Degree"=>$Degree,
            "University"=>$Uni,
            "PassingYear"=>$Passing,
            "Percentage"=>$Per 
        ]);

        return view('JobSeeker/index');

    }

    public function SearchJob($id){

        $MinQualification = DB::table('job_master')->select('MinQualification')->get();
        $CompanyName = DB::table('job_master')->select('CompanyName')->distinct()->get();
        $JobTitle = DB::table('job_master')->select('JobTitle')->distinct()->get();

        $queryBuilder = DB::table('application_master')->select('job_master.JobId','job_master.CompanyName','job_master.JobTitle','application_master.Status','application_master.JobSeekId','application_master.Description')->join('job_master', 'application_master.JobId', '=', 'job_master.JobId')->where('application_master.JobSeekId', '=',$id)->get();
        return view('JobSeeker/SearchJob',['MinQualification' => $MinQualification ,'CompanyName' => $CompanyName ,'JobTitle' => $JobTitle ,'queryBuilder' => $queryBuilder]);
    }

    public function FindJob(Request $request,$id){

        $MinQualification = $request->cmbQual;
        $CompanyName = $request->cmbCompany;
        $JobTitle = $request->cmbArea;

        $results = DB::table('job_master')->where('MinQualification',$MinQualification)->where('CompanyName',$CompanyName)->where('JobTitle',$JobTitle)->get();

        return view('JobSeeker/Search2',['Result'=>$results]);
    }
    public function ApplyJob($JobId,$id){
        $JobId1=$JobId;
        $JobSeekId=$id;
        $Status="Apply";
        $Desc="No Message";

        $data = DB::table('application_master')->where('JobId',$JobId1)->where('JobSeekId',$JobSeekId)->get();
        $data2 = count($data);

        if($data2 == 0){
            
            DB::table('application_master')->insert([
                "JobSeekId" => $JobSeekId,
                "JobId" => $JobId,
                "Status" => $Status,
                "Description" => $Desc
            ]);
        }
        return view('JobSeeker/index');
    }

    public function WalkinJob($id){
        $data1 = DB::table('walkin_master')->get();
        return view('JobSeeker/Walkin',['data' => $data1]);
    }

    public function FeedBack(){
        return view('JobSeeker/FeedBack');
    }

    public function InsertFeedback(Request $req,$id){
        $FeedBack=$req->txtFeedback;
        $data = date("Y-m-d");

        DB::table('Feedback')->insert([            
            "JobSeekId"=>$id,
            "Feedback"=>$FeedBack,
            "FeedbakDate"=>$data
        ]);
        return redirect('FeedBack');
    }
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
