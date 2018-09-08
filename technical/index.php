<!doctype html>
<?php
  $coin = $_GET['c'];

  if (strcmp($coin,"") == 0) {
     $coin = "BXTH:BTCTHB";
  }
  
?>
<html lang="en">
  <head>
    <title><?php echo $coin  ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
</html>
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
iframe,.col-6 {
       padding-right: 0px; 
      padding-left: 0px; 
  }
  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px; 
    margin-left: 0px; 
}
  .ribbon {
  position: absolute;
  right: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  width: 100px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#9BC90D 0%, #79A70A 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; right: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #79A70A;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #79A70A;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}
  </style>
<body>
  <div class="row">
<!-- TradingView Widget BEGIN -->
<div class="col-6 col-md-3 tradingview-widget-container">
   <div class="ribbon"><span>4 hours</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "4h"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
    <div class="ribbon"><span>1 Day</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "1D"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
    <div class="ribbon"><span>1 Week</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "1W"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
    <div class="ribbon"><span>1 Month</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "1M"
}
  </script>
</div>
</div>
  <div class="row">
<!-- TradingView Widget BEGIN -->
<div class="col-6 col-md-3 tradingview-widget-container">
    <div class="ribbon"><span>1 Minute</span></div>
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "1m"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
    <div class="ribbon"><span>5 Minutes</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "5m"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
   <div class="ribbon"><span>15 Minutes</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "15m"
}
  </script>
</div>
<div class="col-6 col-md-3 tradingview-widget-container">
  <div class="ribbon"><span>1 Hour</span></div>
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "symbol": "<?php echo $coin  ?>",
  "interval": "1h"
}
  </script>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
</body>

