@extends('app', ['disable_nav' => true])
@section('title', __('auth.accountsuspended'))

@section('content')
  <div class="clearfix" style="height: 30vh;"></div>
  <div class="row mt-2">
    <div class="col-lg-6 mx-auto content-center">
      <div class="card p-1">
        <h5 class="m-1 text-danger">
          @lang('auth.suspendedmessage')
          <i class="fas fa-user-lock float-end"></i>
        </h5>
      </div>
    </div>
  </div>
@endsection
