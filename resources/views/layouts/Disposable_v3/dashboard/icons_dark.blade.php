{{-- ROW WITH ICONS --}}
<div class="row mb-5 mt-5">

  <div class="col">
    <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
      <div class="card-body bg-transparent p-0">
    <div class="text-center"><i class="fas fa-plane icon  fa-2x"></i></div>
      <h5 class="boxtitle card-title m-0 p-0 text-center">{{ $user->flights }}</h5>
      <h6 class="boxdescription card-title m-0 p-0 text-center">{{ trans_choice('common.flight', $user->flights) }}</h6>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
      <div class="card-body bg-transparent p-0">
      <div class="text-center"><i class="fas fa-clock fa-2x"></i></div>
      <h5 class="boxtitle card-title m-0 p-0 text-center">@minutestotime($user->flight_time)</h5>
      <h6 class="boxdescription card-title m-0 p-0 text-center">@lang('pireps.flighttime')</h6>
      </div>
    </div>
  </div>

  @if($DBasic)
    <div class="col">
      <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
        <div class="card-body bg-transparent p-0">
         <div class="text-center"><i class="fas fa-plane-arrival fa-2x"></i></div>
          <h5 class="card-title m-0 p-0 text-center">@widget('DBasic::PersonalStats', ['user' => $user->id, 'type' => 'avglanding'])</h5>
          <h6 class="card-title m-0 p-0 text-center">@lang('disposable.avg_lrate')</h6>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
        <div class="card-body bg-transparent p-0">
           <div class="text-center"><i class="fas fa-pen-alt fa-2x"></i></div>
          <h5 class="card-title m-0 p-0 text-center">@widget('DBasic::PersonalStats', ['user' => $user->id, 'type' => 'avgscore'])</h5>
          <h6 class="card-title m-0 p-0 text-center">@lang('disposable.avg_score')</h6>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
        <div class="card-body bg-transparent p-0">
          <div class="text-center"><i class="fas fa-stopwatch fa-2x"></i></div>
          <h5 class="card-title m-0 p-0 text-center">@widget('DBasic::PersonalStats', ['user' => $user->id, 'type' => 'avgtime'])</h5>
          <h6 class="card-title m-0 p-0 text-center">@lang('disposable.avg_ftime')</h6>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
        <div class="card-body bg-transparent p-0">
          <div class="text-center"><i class="fas fa-gas-pump fa-2x"></i></div>
          <h5 class="card-title m-0 p-0 text-center">@widget('DBasic::PersonalStats', ['user' => $user->id, 'type' => 'avgfuel'])</h5>
          <h6 class="card-title m-0 p-0 text-center">@lang('disposable.avg_fused')</h6>
        </div>
      </div>
    </div>
  @endif

  <div class="col">
    <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
      <div class="card-body bg-transparent p-0">
        <div class="text-center"><i class="fas fa-map-marker fa-2x"></i></div>
        <h5 class="card-title m-0 p-0 text-center">{{ $current_airport ?? '--' }}</h5>
        <h6 class="card-title m-0 p-0 text-center">@lang('airports.current')</h6>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-transparent shadow-none text-dark border-0 mb-2">
      <div class="card-body bg-transparent p-0">
        <div class="text-center"><i class="fas fa-money-bill-alt fa-2x"></i></div>
        <h5 class="card-title m-0 p-0 text-center">{{ optional($user->journal)->balance }}</h5>
        <h6 class="card-title m-0 p-0 text-center">@lang('dashboard.yourbalance')</h6>
      </div>
    </div>
  </div>

</div>