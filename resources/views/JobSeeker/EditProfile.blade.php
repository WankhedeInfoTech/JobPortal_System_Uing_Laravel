<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
</head>

<body>
    <div class="d-flex">
        <div class="">
            @include('JobSeeker.DashBord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4>Edit Employer</h4>
            <div class="container mt-2">
                <div class="container mx-3">                    
                    <form method="POST" name="frmlogin" action="/EditProfile11" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">JobSeeker Updatation Form</h3>
                        <div class="row">
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>JobSeeker Name</label>
                                    <input type="hidden" name="ID1" class="form-control" style="width:370px" value="{{$data->JobSeekId}}">
                                    <input type="text" name="txtName" class="form-control" style="width:370px" value="{{$data->JobSeekerName}}">
                                </label>
                            </div>
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>Mobile</label>
                                    <input type="text" name="txtMobile" class="form-control" style="width:370px" value="{{$data->Mobile}}">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>Address</label>
                                    <textarea class="form-control" name="txtAddress" id="exampleFormControlTextarea1" rows="4" style="width:370px" >{{$data->Address}}</textarea>
                                </label>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label>
                                        <label>City</label>
                                        <input type="text" name="txtCity" class="form-control" style="width:370px" value="{{$data->City}}">
                                    </label>
                                </div>
                                <div class="form-group mt-2">
                                    <label>
                                        <label>Email</label>
                                        <input type="text" name="txtEmail" class="form-control" style="width:370px" value="{{$data->Email}}">
                                    </label>
                                </div>
                            </div>                      
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-12">
                                <label>
                                    <label>Qualification</label>
                                    <input type="text" name="txtQualification" class="form-control" style="width:370px" value="{{$data->Qualification}}">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>BirthDate</label>
                                    <input type="date" name="txtBirthDate" class="form-control" style="width:370px" value="{{$data->BirthDate}}">
                                </label>
                            </div>
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>Upload Resume</label>
                                    <input type="hidden" name="old_image"
                                    value="@isset($data) {{ $data->Resume }} @endisset"
                                    class="form-control form-control-sm w-100 border border-secondary"
                                    id="" />
                                <input type="file" name="pimage"
                                    class="form-control form-control-sm w-100 border border-secondary"
                                    id="" />
                                <img name="cur_image" src="{{ asset('/uploads/' . $data->Resume) }} "
                                    class="form-control form-control-sm w-100 border border-secondary"
                                    style="height:130px" id="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>User Name</label>
                                    <input type="text" name="txtUserName" class="form-control" style="width:370px" value="{{$data->UserName}}">
                                </label>
                            </div>
                            <div class="form-group mt-3 col-6">
                                <label>
                                    <label>Password</label>
                                    <input type="text" name="txtPassword" class="form-control" style="width:370px" value="{{$data->Password}}">
                                </label>
                            </div>
                        </div>                                    
                        <button type="submit" name="login" class="btn btn-success mt-3" style="width:760px">Update</button>
                    </form>                </div>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>