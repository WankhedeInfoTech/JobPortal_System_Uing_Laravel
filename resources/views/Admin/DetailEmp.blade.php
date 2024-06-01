<!DOCTYPE html>
<!-- http://www.gstatic.com/generate_204  2022067174-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css//bootstrap.min.css">
  <script src="./js//bootstrap.bundle.js"></script>
</head>

<body>
  <div class="d-flex">
    <div class="">
      @include('Admin.DashBord')
    </div>
    <div class="flex-fill" style="background-color: #f1f2f3;">
      <h4>Aprove Employer Page</h4>
      <div class="d-flex flex-row">
        <div class="container rounded-2 mt-2 mx-1">
          @foreach ($data as $item)                        
          <table class="table table-striped table-hover">
            <tr>
              <th colspan="2" class="text-center">Employer Info</th>
            </tr>
            <tr>
              <td>ID:</td>
              <td>{{$item->EmployerId}}</td>              
            </tr>
            <tr>
              <td>Company Name:</td>
              <td>{{$item->CompanyName}}</td>              
            </tr>
            <tr>
              <td>Contact Person:</td>
              <td> {{$item->ContactPerson}}</td>             
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
              <td>Area of Work:</td>
              <td>{{$item->Area_Work}}</td>              
            </tr>
            <tr>
              <td colspan="2" class="text-center"><strong><a href="/ApprovEmp/{{$EmpId = $item->EmployerId}}" class="btn btn-success">Approv Employer</a></strong></td>
              <td>&nbsp;</td>
            </tr>
          </table>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>

</html>