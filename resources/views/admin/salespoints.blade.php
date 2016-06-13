@extends('layouts.master')

@section('content')

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ادارة نقاط البيع</h3>
      </div>
      <div class="panel-body">
        <table id="myTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>اسم نقطة البيع</th>
              <th>المبيعات</th>
              
            </tr>
          </thead>
          <tbody>

            <div class="text-right">
              <a href="#" class="btn btn-success btn-md"> <i class="fa fa-plus-circle"></i> اضافة نقطة بيع</a> 
            </div>
            <br>
            <br>

            


            @foreach ($points as $point)
              <tr>
                <td>
                  {{ $point['name'] }}
                </td>
                <td>
                  {{ $point['sales'] }}
                </td>
                
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
  


@endsection