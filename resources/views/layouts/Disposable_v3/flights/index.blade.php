@extends('app')
@section('title', trans_choice('common.flight', 2))
@include('theme_helpers')
@php
  $units = isset($units) ? $units : DT_GetUnits();
  $DBasic = isset($DBasic) ? $DBasic : DT_CheckModule('DisposableBasic'); 
@endphp
@section('content')
@if(!$flights->count())
  <div class="alert alert-info mb-1 p-1 px-2 fw-bold">No flights found !</div>
@else
  <div class="row">
    <div class="col-lg-9">
      @if(Theme::getSetting('flights_table'))
        <div class="card mb-2">
          <div class="card-header p-1">
            <h5 class="m-1">
              {{ trans_choice('common.flight', 2) }}
              <i class="fas fa-paper-plane float-end"></i>
            </h5>
          </div>
          <div class="card-body p-0 table-responsive">
            @include('flights.table')
          </div>
          @if($flights->count())
            <div class="card-footer p-0 px-1 small text-end fw-bold">
              @lang('disposable.pagination', ['first' => $flights->firstItem(), 'last' => $flights->lastItem(), 'total' => $flights->total()])
            </div>
          @endif
        </div>
      @else
        @include('flights.card')
      @endif
      {{ $flights->links('pagination.auto') }}
    </div>
    <div class="col-lg-3">
      @include('flights.search')
      @include('flights.nav')
      @if($DBasic && Theme::getSetting('gen_map_flight'))
        @widget('DBasic::Map')
      @endif
      @if($DBasic && Theme::getSetting('gen_map_fleet'))
        @widget('DBasic::Map', ['source' => 'fleet'])
      @endif
    </div>
  </div>
@endif
@endsection

@include('flights.scripts')