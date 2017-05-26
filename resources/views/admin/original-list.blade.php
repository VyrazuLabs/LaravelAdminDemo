@extends('layout.master')

@section('title')
  Original List
@endsection

@section('meta')
@endsection

@section('content')
<!-- main area of the panel starts -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="pull-left">
        Original List
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-custom-main">
            <div class="box-body">
              <div class="table-responsive table-responsive-custom">
                <table id="table-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl. No.</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Company Name</th>
                    <th>Phone</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i=1;  @endphp
                  @foreach($details as $data)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$data->user_name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->company_name}}</td>
                      <td>{{$data->phone}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="top-ab" style="position: absolute;top: -45px;right: 15px;">
            
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  



@endsection

@section('add-footer-js')
<script type="text/javascript">
$(document).ready(function() {
    $('#table-data').DataTable( {
    } );
} );
</script>
@endsection
