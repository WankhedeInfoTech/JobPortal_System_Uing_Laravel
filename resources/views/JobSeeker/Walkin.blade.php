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
            @include('JobSeeker.DashBord') 
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4 class="mx-3 mt-2">Walkin Page</h4>
            <hr>
            <div class="container mt-2">                                                 
                <table class="table table-striped table-hover">
                  @foreach ($data as $item)                  
                  <tr>
                    <th></th><strong>Company Name</strong>:</div></th>
                    <th></th><strong>{{$item->CompanyName}}</strong></div></th>
                  </tr>
                 
                  <tr>                
                   <td><strong>Job Title:</strong></></td>
                    <td><strong>{{$item->JobTitle}}</strong></td>
                  </tr>
                  <tr>                   
                    <td><strong>Vacancy</strong>:</td>
                    <td><strong>{{$item->Vacancy}}</strong></td>
                  </tr>
                  <tr>                   
                    <td><strong>Qualification:</strong></td>
                    <td><strong>{{$item->MinQualification}}</strong></td>
                  </tr>
                  <tr>                    
                    <td><strong>Description:</strong></td>
                    <td><strong>{{$item->Description}}</strong></td>
                  </tr>
                  <tr>                    
                    <td><strong>Date:</strong></td>
                    <td><strong>{{$item->InterviewDate}}</strong></td>
                  </tr>
                  <tr>
                    <td></td><strong>Time:</strong></div></td>
                    <td></td><strong>{{$item->InterviewTime}}</strong></td>
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