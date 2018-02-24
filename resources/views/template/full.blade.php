<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Your Page Description." />
        <title>Trade Logger</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css" />
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
      @auth
        <div class="columns">
          <div class="column is-8 is-offset-2">
            <div class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item" href="{{route('trade.index')}}">Trades</a>
                <a class="navbar-item" href="{{route('scorecard')}}">Scorecard</a>
              </div>

              <div class="navbar-end">
                @if(auth()->user()->id == 1)
                <a class="navbar-item" href="{{route('future.index')}}">Settings</a>
                @endif
                <a class="navbar-item" href="{{route('logout')}}">Logout</a>
              </div>
            </div>
          </div>
        </div>
      @endauth
      <div class="columns">
        <div class="column is-8 is-offset-2">
          @yield('content')
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script type="text/javascript">
      $(".symbolModal").click(function() {
        $(".symbolModal"+$(this).attr("data-symbolId")).addClass("is-active");
      });
      $("#logTradeModal").click(function() {
        $(".logTradeModal").addClass("is-active");
      });
      $("#addFuture").click(function() {
        $(".addFuture").addClass("is-active");
      });
      $(".noteModal").click(function() {
        $(".noteModal"+$(this).attr("data-id")).addClass("is-active");
      });
      $(".imageModal").click(function() {
        $(".imageModal"+$(this).attr("data-id")).addClass("is-active");
      });
      $(".newImageModal").click(function() {
        $(".newImageModal"+$(this).attr("data-id")).addClass("is-active");
      });
      $(".updateTradeModal").click(function() {
        $(".updateTradeModal"+$(this).attr("data-id")).addClass("is-active");
      });
      $(".deleteTradeModal").click(function() {
        $(".deleteTradeModal"+$(this).attr("data-id")).addClass("is-active");
      });
      $(".modal-close").click(function() {
       $(".modal").removeClass("is-active");
      });
      $(".button-close").click(function() {
       $(".edit-modal").removeClass("is-active");
      });

      $(".stop.input").focusout(function()
      {
        var symbol = $('.symbol.input').val();
        var entry = $('.entry.input').val();
        var exit = $('.exit.input').val();
        var stop = $('.stop.input').val();

        $.post( "/riskreward", {
          symbol: symbol,
          entry: entry,
          exit: exit,
          stop: stop,
        })
        .done(function( data ) {
          console.log(data);
          $('#risk').text('$'+data['risk']);
          $('#reward').text('$'+data['reward']);
        });
      });

      $('.win').click(function(){
        $('.tag.is-primary').removeClass('is-primary');
        $(this).addClass('is-primary');
        $('tr').hide();
        $('tr.win').show();
      });
      $('.loss').click(function(){
        $('.tag.is-primary').removeClass('is-primary');
        $(this).addClass('is-primary');
        $('tr').hide();
        $('tr.loss').show();
      });
      $('.all').click(function(){
        $('.tag.is-primary').removeClass('is-primary');
        $(this).addClass('is-primary');
        $('tr').show();
      });



      </script>
    </body>
</html>
