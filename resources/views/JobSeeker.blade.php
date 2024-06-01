@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceWala.com</title>
    <link rel="stylesheet" href="./css//bootstrap.min.css">
    <script src="./js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container mt-3">
    <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="RegisterJobSeeker"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg><span class="mx-2">New JobSeeker Register</span></a>
        </div>
        <div class="mt-3">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Company Name</th>
                    <th>City</th>
                    <th>Email</th>
                </tr>    
                        @foreach ($data1 as $data1)            
                        <tr>
                            <td>{{ $data1->JobSeekerName}}</td>
                            <td>{{ $data1->City}}</td>
                            <td>{{ $data1->Email}}</td>                            
                        </tr>   
                        @endforeach                                               
            </table>
        </div>    
    </div>
</body>
</html>