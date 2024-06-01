<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>

<body>
    <div class="d-flex">
        <div class="">
            @include('Employer.dashbord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4 class="mx-3 mt-2">Profile</h4>
            <hr>
            <div class="container mt-2">
                     <table class="table table-striped table-hover">
                        <tr >
                            <th colspan="2" class="text-center">User Information</th>
                        </tr>
                        <tr>
                            <td>Company ID:</td>
                            <td>{{ $data->EmployerId }}</td>                                                                                                                                                                                                                                  
                        </tr>
                        <tr>
                            <td>Company Name:</td>
                            <td>{{ $data->CompanyName }}</td> 
                        </tr>
                        <tr>
                            <td>Contact Person:</td>
                            <td>{{ $data->ContactPerson }}</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{ $data->Address }}</td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td>{{ $data->City }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ $data->Email }}</td> 
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{ $data->Mobile }}</td> 
                        </tr>
                        <tr>
                            <td>Area Of Work</td>
                            <td>{{ $data->Area_Work }}</td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>{{ $data->UserName }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong><a href="/EditProfile/{{ $data->EmployerId }}">Edit Profile</a></strong></td>
                            <td></td>
                        </tr>
                    </table>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>