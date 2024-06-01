<!DOCTYPE html>
<!-- http://www.gstatic.com/generate_204  2022067174-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-flex">
        <div class="">
            @include('Admin.DashBord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h2>Manage Job Seeker</h2>
            <div class="container mt-2">
                <div class="mt-3">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Job Seeker Name</th>
                            <th>City</th>
                            <th>Gender</th>
                            <th>Detail</th>
                        </tr>
                            @foreach ($data as $item)
                                    
                                <tr>
                                    <td>{{$item->JobSeekId}}</td>                                    
                                    <td>{{$item->JobSeekerName}}</td>                                    
                                    <td>{{$item->City}}</td>                                    
                                    <td>{{$item->Gender}}</td>                                    
                                    <td><a href="/DetailJob/{{ $JobId = $item->JobSeekId}}" class="btn btn-primary">Detail</a></td>
                                </tr>                                                                                
                            @endforeach
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success">Total {{$data1}} Records </button>
                </div>

            </div>
        </div>
    </div>  
</body>
</html>