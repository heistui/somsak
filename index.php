<!doctype html>
<?php
  $coin = $_GET['c'];

	if (strcmp($coin,"") == 0) {
     $coin = "BINANCE:btcUSDT";
	}
  
?>
<!-- https://www.tradingview.com/wiki/Widget:TradingView_Widget  -->
<html lang="en">
  <head>
    <title><?php echo $coin  ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120356923-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-120356923-1');
	</script>
  </head>
  <style type="text/css">
html,body,.col-md-12{
  height:100%;
}
.row {
	height:50%;
}
.row > iframe {
  height:100%;
}
iframe,.col-md-4,.col-12 {
       padding-right: 0px; 
      padding-left: 0px; 
	  border-width:0px;
  }
  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px; 
    margin-left: 0px; 
}
  
  </style>
  <body >

<div class="row">
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=60&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=120&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=D&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=1&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=5&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
 <iframe class="col-12 col-md-4" src="https://s.tradingview.com/widgetembed/?symbol=<?php echo $coin  ?>&interval=30&hidesidetoolbar=1&symboledit=1&saveimage=1&toolbarbg=f1f3f6&studies=MACD%40tv-basicstudies&hideideas=1&theme=Light&style=1&timezone=Asia/Bangkok&withdateranges=1&studies_overrides=%7B%7D&overrides=%7B%7D&enabled_features=%5B%5D&disabled_features=%5B%5D&locale=en&utm_source=www.ccn.com&utm_medium=widget&utm_campaign=chart"></iframe>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
  </body>
</html>
