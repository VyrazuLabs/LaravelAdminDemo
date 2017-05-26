@extends('layout.master')

@section('title')
  Create User
@endsection

@section('meta')
@endsection

@section('content')
<style type="text/css">
  .strong{
    color: #a94442 !important;
}
</style>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Create User
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-custom-main">
          {!! Form::open(array('url' => url('/admin_rwt/user/save'), 'class' => 'form-hall-entry' )) !!}
            @if( !empty($users->user_id) )
              {{ Form::model($users) }}
              {!! Form::hidden('user_id', $users->user_id) !!}
            @endif
            <div class="box-body">
              <div class="form-group form-custom-group">
                <label>First Name <span>*</span></label>         
                {!! Form::text('first_name', null, 
                      array(
                            'class'=>'form-control', 
                            'placeholder'=>'First Name')) !!}
                @if ($errors->has('first_name'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('first_name') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Last Name <span>*</span></label>
                {!! Form::text('last_name', null, 
                      array('class'=>'form-control', 
                            'placeholder'=>'Last Name')) !!}
                @if ($errors->has('last_name'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('last_name') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Email ID <span>*</span></label>
                  {!! Form::text('email', null, 
                        array('class'=>'form-control', 
                              'placeholder'=>'Email')) !!}     
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong class="strong">{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Password <span>*</span></label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              @if( !empty($users->user_id) )
              {{ Form::model($user_details) }}
              {!! Form::hidden('user_id', $users->user_id) !!}
              @endif
              <div class="form-group form-custom-group">
                <label>Company</label>
                {{ Form::select('company_id', $company_name, null, ['placeholder' => '-- Select A Status --', 'class' => 'form-control col-md-7 col-xs-12']) }}

                @if ($errors->has('company_id'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('company_id') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Department</label>
                {{ Form::select('department_id', ['Department1' => 'Deptartment1', 'Deptartment2' => 'Deptartment2'], null, ['placeholder' => '-- Select A Status --', 'class' => 'form-control col-md-7 col-xs-12']) }}

                @if ($errors->has('department_id'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('department_id') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label> Group</label>
                {{ Form::select('group_id', ['Group1' => 'Group1', 'Group2' => 'Group2'], null, ['placeholder' => '-- Select A Status --', 'class' => 'form-control col-md-7 col-xs-12']) }}

                @if ($errors->has('group_id'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('group_id') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label> Role</label>
                {{ Form::select('role_id', ['Admin' => 'Admin', 'User' => 'User'], null, ['placeholder' => '-- Select A Status --', 'class' => 'form-control col-md-7 col-xs-12']) }}

                @if ($errors->has('role_id'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('role_id') }}</strong>
                  </span>
                @endif
              </div>
              @if( !empty($users->user_id) )
              {{ Form::model($users) }}
              {!! Form::hidden('user_id', $users->user_id) !!}
              @endif
              <div class="form-group form-custom-group">
                <label> Status</label>
                {{ Form::select('status', ['0' => 'Inactive', '1' => 'Active'], null, ['placeholder' => '-- Select A Status --', 'class' => 'form-control col-md-7 col-xs-12']) }}

                @if ($errors->has('status'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('status') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-success btn-booking">Submit</button>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
      
    </div>
  </section>
</div>

@endsection
@section('add-footer-js')

@endsection
