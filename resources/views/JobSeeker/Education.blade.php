<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Page</title>
</head>

<body>
    <div class="d-flex">
        <div class="">
            @include('JobSeeker.DashBord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h4 class="mx-3 mt-2">Education Page</h4>
            <hr>
            <div class="container mt-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Create Educational Profile
                </button>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Educational Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" name="frmlogin" action="/Education/{{ $id = session('ID1') }}">
                         @csrf
                            <div class="form-group mt-3">
                                <label>
                                    <label>Degree</label>
                                    <input type="text" name="cmbQual" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Other Degree</label>
                                    <input type="text" name="txtOther" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>University / Bord Name</label>
                                    <input type="text" name="txtBoard" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Passing Year</label>
                                    <select name="cmbYear" class="form-control" style="width:475px">
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                    <label>Percentage(%)</label>
                                    <input type="text" name="txtPer" class="form-control" style="width:475px">
                                </label>
                            </div>
                            <button type="submit" name="login" class="btn btn-success mt-3" style="width:475px">Submit</button>
                        </form>     
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="container mt-2">

                <table class="table table-striped table-hover">                    
                    <tr>
                        <th>Degree</th>
                        <th>University</th>
                        <th>Passing Year</th>
                        <th>Percentage</th>
                    </tr>
                     @foreach ($data as $data)                                            
                        <tr>
                            <th>{{$data->Degree}}</th>                            
                            <th>{{$data->University}}</th>                            
                            <th>{{$data->PassingYear}}</th>                            
                            <th>{{$data->Percentage}}</th>                            
                        </tr>   
                     @endforeach                    
                </table>               
            </div>
            <div>
                <button class="btn btn-success">Total {{$total}} Records</button>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
</body>
</html>