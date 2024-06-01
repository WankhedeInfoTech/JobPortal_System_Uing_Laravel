<!DOCTYPE html>
<!-- http://www.gstatic.com/generate_204  2022067174-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js//bootstrap.bundle.js"></script>
</head>

<body>
    <div class="d-flex">
        <div class="">
            @include('Admin.DashBord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h3>Approv page</h3>
            <div class="d-flex flex-row">
                <div class="container rounded-2 mt-2 mx-1">
                    @foreach ($data as $data)                        
                    <table class="table table-striped table-hover">                    
                        <tr >
                            <th colspan="2" class="text-center">User Information</th>
                        </tr>
                        <tr>
                            <td>Id:</td>
                            <td>{{$data->JobSeekId}}</td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>{{$data->JobSeekerName}}</td>                            
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{$data->Address}}</td>                            
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td>{{$data->City}}</td>                            
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{$data->Email}}</td>                            
                        </tr>
                        <tr>
                            <td>Mobile:</td>
                            <td>{{$data->Mobile}}</td>                            
                        </tr>
                        <tr>
                            <td>Highest Qualification:</td>
                            <td>{{$data->Qualification}}</td>                            
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>{{$data->Gender}}</td>                            
                        </tr>
                        <tr>
                            <td>Birth Date:</td>
                            <td>{{$data->BirthDate}}</td>                            
                        </tr>
                        <tr>
                            <td>Resume:</td>
                            <td>
                                <input type="hidden" name="old_image"
                                value="@isset($data) {{ $data->Resume }} @endisset"
                                class="form-control form-control-sm w-100 border border-secondary"
                                id="" />
                                <img name="cur_image" src="{{ asset('/uploads/' . $data->Resume) }} "
                                class="form-control form-control-sm w-100 border border-secondary"
                                style="height:130px" id="" /></a>
                            </td>
                        </tr>
                        <tr>                            
                            <td colspan="2" class="text-center"><strong><a href="/ApprovJob/{{$JobId = $data->JobSeekId}}" class="btn btn-success">ApprovJob Seeker</a></strong></td>
                            <td></td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>