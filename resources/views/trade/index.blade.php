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
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 30 Days<br/> Total/ Wins / Losses</p>
      <p class="title">{{$monthProgressData->count()}} / <span style="color:green">{{$monthProgressData->where('status','win')->count()}}</span> / <span style="color:red">{{$monthProgressData->where('status','loss')->count()}}</span></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 30 Days Profit / Loss</p>
      <p class="title"><span style="color:green">${{number_format($monthProgressData->where('status','win')->sum('pl'))}} </span>/ <span style="color:red">${{number_format($monthProgressData->where('status','loss')->sum('pl'))}}</span></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Last 30 Days Average Win / Loss</p>
      <p class="title"><span style="color:green">{{$monthProgressData->where('status','win')->avg('pl')}}</span> / <span style="color:red">{{$monthProgressData->where('status','loss')->avg('pl')}}</span></p>
    </div>
  </div>
</nav>

<a href="#" id="logTradeModal" class="button is-primary">Log New Trade</a>
@include('trade.store')
<div class="table-scrollable">
<table class="table is-fullwidth">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Images</th>
            <th>P/L</th>
            <th class="date">Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
    <tr class="{{$trade->status}}">
      <td>
        <b>{{($trade->position == 'short'? '&darr;' : '&uarr;')}}</b> <a href="#" class="symbolModal" data-symbolId="{{$trade->id}}" data-target="symbolModal{{$trade->id}}">{{strtoupper($trade->symbol)}}</a>
        <div class="modal symbolModal{{$trade->id}}">
          <div class="modal-background"></div>
          <div class="modal-content show">
            @include('trade.show')
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>
      </td>
      <td>
        <div class="tags">
          @foreach($trade->images as $image)
            <a href="#" class="imageModal tag" data-target="imageModal{{$image->id}}" data-id="{{$image->id}}">{{$image->title}}</a>
            <div class="modal showImage imageModal{{$image->id}}">
              <div class="modal-background"></div>
              <div class="modal-content">
                <p class="image is-4by3">
                  <img src="{{Storage::url($image->path)}}">
                </p>
                &nbsp;<b>EN - {{$trade->entry}}</b> / <b>Ex - {{$trade->exit}}</b> / <b>Stop - {{$trade->stop}}</b>
              </div>
              <button class="modal-close is-large" aria-label="close"></button>
            </div>
          @endforeach
         </div>
      </td>
      <td>
        @if(!empty($trade->pl))
        ${{$trade->pl}}
        @endif
      </td>
      <td class="date">
        {{$trade->datetime()}}
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
