@extends('layout.master')

@section('title')
  Create Company
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
      Create Company
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-custom-main">
          {!! Form::open(array('url' => url('/admin_rwt/company/save'), 'class' => 'form-hall-entry' )) !!}
            @if( !empty($company->company_id) )
              {{ Form::model($company) }}
              {!! Form::hidden('company_id', $company->company_id) !!}
            @endif
            <div class="box-body">
              <div class="form-group form-custom-group">
                <label>Company Name<span>*</span></label>         
                {!! Form::text('company_name', null, 
                      array(
                            'class'=>'form-control', 
                            'placeholder'=>'First Name')) !!}
                @if ($errors->has('company_name'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('company_name') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Phone <span>*</span></label>
                {!! Form::text('phone', null, 
                      array('class'=>'form-control', 
                            'placeholder'=>'Phone')) !!}
                @if ($errors->has('phone'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('phone') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group form-custom-group">
                <label>Address <span>*</span></label>
                {!! Form::textarea('address', null, 
                      array('class'=>'form-control', 
                            'placeholder'=>'Address')) !!}
                @if ($errors->has('address'))
                  <span class="help-block">
                    <strong class="strong">{{ $errors->first('address') }}</strong>
                  </span>
                @endif
              </div>
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
