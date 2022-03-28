@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-sm-12">
          <div class="full-right">
              <div class="container">
                  <div class="row" style="margin-bottom:2%;">
                      <div class="col-sm-4" style="margin-bottom: 10px;">
                          <h2 style="margin-right: -129%;">Les plans d'action annuels:</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'plans.store', 'method'=>'POST']) }}
        @include('plans.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection