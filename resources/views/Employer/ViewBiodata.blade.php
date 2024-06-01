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
            @include('Employer.dashbord')
        </div>
        <div class="flex-fill" style="background-color: #f1f2f3;">
            <h2>Welcome To Control Panel</h2>
            <div class="container">
                <table class="table table-striped table-hover">
                    @foreach ($JobRecord1 as $JobRecord1)                                        
                            <tr>
                                <td>Name</td>
                                <td>{{$JobRecord1->JobSeekerName}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>Address:</strong></td>
                                <td>{{ $JobRecord1->Address}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>City:</strong></td>
                                <td>{{ $JobRecord1->City}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $JobRecord1->Email}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>Mobile:</strong></td>
                                <td>{{ $JobRecord1->Mobile}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>Highest Qualification:</strong></td>
                                <td>{{ $JobRecord1->Qualification}}</td>                        
                            </tr>
                            <tr>
                                <td><strong>Gender:</strong></td>
                                <td>{{ $JobRecord1->Gender}}</td>
                                
                            </tr>
                            <tr>
                                <td><strong>Birth Date:</strong></td>
                                <td>{{ $JobRecord1->BirthDate}}</td>
                                
                            </tr>
                            <tr>
                                <td><strong>Resume:</strong></td>
                                <td> <img name="cur_image" src="{{ asset('/uploads/' . $JobRecord1->Resume) }}" class="form-control form-control-sm w-100 border border-secondary" style="height:130px" id="" /></td>
                            </tr>
                    @endforeach
                </table>
                <div>
                    <h2>Educational Qualification</h2>
                </div>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>
                            Degree
                        </th>
                        <th>
                            University
                        </th>
                        <th>
                            Passing Year
                        </th>
                        <th>
                            Percentage
                        </th>
                    </tr>
                    @foreach ($JobRecord2 as $JobRecord2)
                        <tr>
                            <td>
                                {{ $JobRecord2->Degree}}
                            </td>
                            <td>
                                {{ $JobRecord2->University}}
                            </td>
                            <td>
                                {{ $JobRecord2->PassingYear}}
                            </td>
                            <td>
                                {{ $JobRecord2->Percentage}}
                            </td>
                        </tr>
                    @endforeach
                </table>
                </td>
                </tr>
                </table>
            </div>

            @if ($Status == "Apply")    
                <form id="form1" method="Post" action="/CallLatter/{{$JobId}}/{{$JobSeekId}}/{{$ApplicationId}}">
                    @csrf 
                    <div>                 
                         <label>Call Latter Description</label>                         
                         <textarea name="txtDesc"  cols="10" rows="3" class="form-control" placeholder="Please Enter Something About Interview Process"></textarea>                                                                                                   
                    </div>
                    <input type="submit" name="button" id="button" value="Submit" class="btn btn-primary"/> 
                </form>
            @endif        
        </div>
    </div>
</body>

</html>