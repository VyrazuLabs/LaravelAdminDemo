@extends('layout.master')

@section('title')
  Company List
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
        Company List
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
                    <th>Company Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i=1;  @endphp
                  @foreach($company as $company_data)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$company_data->company_name}}</td>
                      <td>{{$company_data->phone}}</td>
                      <td>{{$company_data->address}}</td>
                      <td>
                        @if($company_data->status == 1)
                          Active
                        @else
                          Inactive
                        @endif
                      </td>
                      <td>

                      <a href="{{ url('/admin_rwt/company/edit',array($company_data->company_id))}}"  title="edit"><i class="fa fa-edit"></i></a>
                      <a href="{{ url('/admin_rwt/company/delete',array($company_data->company_id))}}" title="edit"><i class="fa fa-trash"></i></a>
                      </td>
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
