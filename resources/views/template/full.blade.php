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
      <div class="columns is-mobile">
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
      </script>
    </body>
</html>
