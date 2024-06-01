<html>
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
            <h4>Application Page</h4>
            <div class="container mt-2">
                <div>
                        <div class="container">
                            <table  class="table table-striped table-hover">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>View & Send</th>
                                </tr>
                                <tr>
                                    @foreach ($JobRecord as $item)
                                    <td>{{$item->ApplicationId}}</td>
                                    <td>{{$item->JobSeekerName}}</td>
                                    <td>{{$item->City}}</td>
                                    <td>{{$item->Email}}</td>
                                    <th>{{$item->Status}}</th>
                                    <td><a href="/ViewBiodata/{{ $JobSeekId = $item->JobSeekId}}/{{ $ApplicationId = $item->ApplicationId}}/{{$JobId = $JobTitle }}/{{ $Status = $item->Status}}">View</a></td>
                                    @endforeach
                                </tr>                                                                                                                                                                                                                                                                                                                       
                            </table>
                        </div>                    
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success">Total {{$total}} Records </button>
                </div>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>