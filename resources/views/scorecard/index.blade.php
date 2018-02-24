@extends('template.full')
@section('content')

<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 7 Days<br/> Total / Wins / Losses</p>
      <p class="title"> {{$weekProgressData->count()}} / <span style="color:green">{{$weekProgressData->where('status','win')->count()}}</span> / <span style="color:red">{{$weekProgressData->where('status','loss')->count()}}</span></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 7 Days<br/> Profit / Loss</p>
      <p class="title"><span style="color:green">${{number_format($weekProgressData->where('status','win')->sum('pl'))}}</span> / <span style="color:red">${{number_format($weekProgressData->where('status','loss')->sum('pl'))}}</span></p>
    </div>
  </div>
</nav>
<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 30 Days<br/> Total/ Wins / Losses</p>
      <p class="title">{{$monthProgressData->count()}} / <span style="color:green">{{$monthProgressData->where('status','win')->count()}}</span> / <span style="color:red">{{$monthProgressData->where('status','loss')->count()}}</span></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 30 Days<br/> Profit / Loss</p>
      <p class="title"><span style="color:green">${{number_format($monthProgressData->where('status','win')->sum('pl'))}} </span>/ <span style="color:red">${{number_format($monthProgressData->where('status','loss')->sum('pl'))}}</span></p>
    </div>
  </div>
</nav>
<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Overall<br/> Average Win / Loss</p>
      <p class="title"><span style="color:green">${{round($trades->where('status','win')->avg('pl'))}}</span> / <span style="color:red">${{round($trades->where('status','loss')->avg('pl'))}}</span></p>
    </div>
  </div>
</nav>
@endsection
