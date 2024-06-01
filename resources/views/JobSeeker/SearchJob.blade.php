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
                    <form method="POST" name="frmlogin" action="/SearchJob/{{ $id = session('ID1') }}">
                        @csrf
                            <div class="form-group mt-3">
                                <label>
                                    <label>Select Qualification:</label>
                                    <select name="cmbQual" class="form-control" style="width:475px">
                                        @foreach($MinQualification as $min)
                                            <option value="{{$min->MinQualification}}">{{$min->MinQualification}}</option>                              
                                        @endforeach
                                        </select>
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Select Compnay Name:</label>
                                    <select name="cmbCompany" class="form-control" style="width:475px">
                                        @foreach ($CompanyName as $item)
                                            <option value="{{$item->CompanyName}}">{{$item->CompanyName}}</option>
                                        @endforeach                      
                        </select>
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Select Area of Work:</label>
                                    <select name="cmbArea" class="form-control" style="width:475px">
                                        @foreach ($JobTitle as $JobTitle)
                                             <option value="{{$JobTitle->JobTitle}}">{{$JobTitle->JobTitle}}</option>                                                    
                                        @endforeach   
                                    </select>
                                </label>
                            </div>
                            <button type="submit" name="login" class="btn btn-success mt-3" style="width:475px">Search</button>
                        </form>
                        
                <table class="table table-striped table-hover">
                  <tr>
                    <td><strong>Status of Job</strong></td>
                  </tr>
                  <tr>
                    <td><table class="table table-striped table-hover">
                      <tr>
                        <th ><strong>Company Name</strong></div></th>
                        <th ><strong>Job Title</strong></div></th>
                        <th ><strong>Status</strong></div></th>
                         <th ><strong>Description</strong></div></th>
                      </tr>
                        @foreach ($queryBuilder as $queryBuilder)                                                    
                            <tr>
                                <td>{{$queryBuilder->CompanyName}}</td>
                                <td>{{$queryBuilder->JobTitle}}</td>
                                <td>{{$queryBuilder->Status}}</td>
                                <td>{{$queryBuilder->Description}}</td>
                            </tr>
                        @endforeach
                    </table></td>
                  </tr>
                </table>
                    </div>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>