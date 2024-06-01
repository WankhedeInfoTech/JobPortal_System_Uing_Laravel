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
                <div class="container">
                  <form id="form1" method="post" action="/Application2">
                    @csrf
                    <div class="d-flex flex-row">
                        <select class="form-select" name="cmbTitle">
                          @foreach ($JobRecord as $item)
                          <option value="{{$item->JobId}}">{{$item->JobTitle}}</option>
                          @endforeach
                        </select>
                        <input type="submit" value="View "  class="btn btn-primary mx-2"/>
                    </div>
                  </form>
                </div>
            </div>
            <div class="container mt-2">
            </div>
        </div>
    </div>
</body>
</html>