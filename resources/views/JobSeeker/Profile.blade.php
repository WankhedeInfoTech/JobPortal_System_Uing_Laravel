<!DOCTYPE html>
<!-- http://www.gstatic.com/generate_204  2022067174-->
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
             @include('JobSeeker.DashBord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4 class="mx-3 mt-2">Profile</h4>
            <hr>
            <div class="container mt-2">
                
                
                <table class="table table-striped table-hover">
                    @foreach ($data as $item)
                        <tr >
                            <th colspan="2" class="text-center">User Information</th>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td> {{$item->JobSeekerName}}</td>                        
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{$item->Address}}</td>                            
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td>{{$item->City}}</td>                            
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{$item->Email}}</td>                            
                        </tr>
                        <tr>
                            <td>Mobile:</td>
                            <td>{{$item->Mobile}}</td>                            
                        </tr>
                        <tr>
                            <td>Highest Qualification:</td>
                            <td>{{$item->Qualification}}</td>                            
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{$item->Gender}}</td>                            
                        </tr>
                        <tr>
                            <td>Birth Date:</td>
                            <td>{{$item->BirthDate}}</td>                            
                        </tr>
                        <tr>
                            <td>Resume:</td>
                            <td><a href="" target="_blank"><strong>View</strong></a></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong><a href="/EditProfile1/{{ $id = session('ID1') }}">Edit Profile</a></strong></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </table>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>