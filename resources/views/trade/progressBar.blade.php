<nav class="panel">
  <p class="panel-heading">
    Past 7 Days
  </p>
  <div class="panel-block">
    Wins: {{$weekProgressData->where('status','win')->count()}} / ${{number_format($weekProgressData->where('status','win')->sum('pl'))}}
  </div>
  <div class="panel-block">
    Loss: {{$weekProgressData->where('status','loss')->count()}} / ${{number_format($weekProgressData->where('status','loss')->sum('pl'))}}
  </div>
  <p class="panel-heading">
    Past 30  Days
  </p>
  <div class="panel-block">
    Wins: {{$monthProgressData->where('status','win')->count()}} / ${{number_format($monthProgressData->where('status','win')->sum('pl'))}}
  </div>
  <div class="panel-block">
    Loss: {{$monthProgressData->where('status','loss')->count()}} / ${{number_format($monthProgressData->where('status','loss')->sum('pl'))}}
  </div>
</nav>
