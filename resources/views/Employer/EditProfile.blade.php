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
            @include('Employer.dashbord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4>Edit Employer</h4>
            <div class="container mt-2">
                <div class="container mx-3">
                        <form method="POST" name="frmlogin" action="/EditProfile1">
                           @csrf
                            <div class="form-group mt-3">
                                <label>                                    
                                    <input type="hidden" name="txtId" value="{{ $data->EmployerId }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Company Name:</label>
                                    <input type="text" name="txtName" value="{{ $data->CompanyName }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Contact Person:</label>
                                    <input type="text" name="txtContact" value="{{ $data->ContactPerson }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Address:</label>
                                    <input type="text" name="txtAddress" value="{{ $data->Address }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>City:</label>
                                    <input type="text" name="txtCity" value="{{ $data->City }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Email:</label>
                                    <input type="text" name="txtEmail" value="{{ $data->Email }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Mobile</label>
                                    <input type="text" name="txtMobile" value="{{ $data->Mobile }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Area Of Work</label>
                                    <input type="text" name="txtArea" value="{{ $data->Area_Work }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>User Name</label>
                                    <input type="text" name="txtUser" value="{{ $data->UserName }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Password</label>
                                    <input type="text" name="txtPassword" value="{{ $data->Password }}" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <button type="submit" name="login" class="btn btn-success mt-3" style="width:475px">Update</button>
                        </form>
                </div>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>