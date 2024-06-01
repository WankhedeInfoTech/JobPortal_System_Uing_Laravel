<?php
session_start();
if(isset($_SESSION['JobSeekerName'])){

} 
else{
		header('location:../JobSeekerLogin.php');
}
?>
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
            <h4 class="mx-3 mt-2">Search Job Page</h4>
            <hr>
            <div class="container mt-2">                    
                <div>                                                                                         
                        @foreach ($Result as $results)

                        <form method="POST" action="/Apply/{{ $JobId = $results->JobId}}/{{ $id = session('ID1') }}">   
                            @csrf                         
                          <table class="table table-striped table-hover">
                            <tr>
                            <td><strong>JobId</strong></td>
                            <td><strong>{{$results->JobId}}</strong></td>                            
                            </tr>
                            <tr>
                            <td><strong>CompanyName</strong></td>
                            <td><strong>{{$results->CompanyName}}</strong></td>                            
                            </tr>
                            <tr>
                            <td><strong>JobTitle</strong></td>
                            <td><strong>{{$results->JobTitle}}</strong></td>                            
                            </tr>
                            <tr>
                            <td><strong>Vacancy</strong></td>
                            <td><strong>{{$results->Vacancy}}</strong></td>                            
                            </tr>
                            <tr>
                            <td><strong>MinQualification</strong></td>
                            <td><strong>{{$results->MinQualification}}</strong></td>                            
                            </tr>
                            <tr>
                            <td><strong>Description</strong></td>
                            <td><strong>{{$results->Description}}</strong></td>                            
                            </tr>
                            <tr>                        
                                <td><button class="btn btn-success" type="submit">Apply For Job</button></td>
                            </tr>
                        </table>
                        </form>
                    @endforeach
            </div>
        </div>
    </div>
</body>
</html>