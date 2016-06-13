@extends('layouts.master')

@section('content')

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ادارة الموزعين</h3>
      </div>
      <div class="panel-body">
        <table id="myTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>اسم الموزع</th>
              <th>الراتب</th>
              <th>الصورة</th>
            </tr>
          </thead>
          <tbody>

            <div class="text-right">
              <a href="#" class="btn btn-success btn-md"> <i class="fa fa-plus-circle"></i> اضافة موزع</a> 
            </div>
            <br>
            <br>

            


            @foreach ($dists as $dist)
              <tr>
                <td>
                  {{ $dist['name'] }}
                </td>
                <td>
                  {{ $dist['salary'] }}
                </td>
                <td>
                  <img src="assets/uploads/dist_pictures/{{ $dist['picture'] }}" alt="">
                </td>
                
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
  


@endsection