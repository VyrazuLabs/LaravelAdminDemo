@extends('layout.master')

@section('title')
  User List
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
        List of all users
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Group</th>
                    <th>Role</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i=1;  @endphp
                  @foreach($users as $user)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$user->first_name}}</td>
                      <td>{{$user->last_name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->department_id}}</td>
                      <td>{{$user->group_id}}</td>
                      <td>{{$user->role_id}}</td>
                      <td>{{$user->company_id}}</td>
                      <td>
                        @if($user->status == 1)
                          Active
                        @else
                          Inactive
                        @endif
                      </td>
                      <td>

                      <a href="{{ url('/admin_rwt/user/edit',array($user->user_id))}}"  title="edit"><i class="fa fa-edit"></i></a>
                      <a href="{{ url('/admin_rwt/user/delete',array($user->user_id))}}" title="edit"><i class="fa fa-trash"></i></a>
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
