<!doctype html>
<?php
  $c = $_GET['c'];
?>
<!-- https://www.tradingview.com/wiki/Widget:TradingView_Widget  -->
<html lang="en">
  <head>
    <title><?php echo $c  ?></title>
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


  
  </style>
  <body >
      <div id="raw"><?php echo $c  ?></div>
      <div id="convert"></div>
      <script>
        var x = {
            "1": "ๅ",
            "!": "+",
            "@": "๑",
            "2": "/",
            "3": "-",
            "#": "๒",
            "4": "ภ",
            "$": "๓",
            "5": "ถ",
            "%": "๔",
            "6": "ุ",
            "^": "ู",
            "7": "ึ",
            "&": "฿",
            "8": "ค",
            "*": "๕",
            "9": "ต",
            "(": "๖",
            "0": "จ",
            ")": "๗",
            "-": "ข",
            "_": "๘",
            "=": "ช",
            "+": "๙",
            "q": "ๆ",
            "Q": "๐",
            "w": "ไ",
            "W": "\"",
            "e": "ำ",
            "E": "ฎ",
            "r": "พ",
            "R": "ฑ",
            "t": "ะ",
            "T": "ธ",
            "y": "ั",
            "Y": "ํ",
            "u": "ี",
            "U": "๊",
            "i": "ร",
            "I": "ณ",
            "o": "น",
            "O": "ฯ",
            "p": "ย",
            "P": "ญ",
            "[": "บ",
            "{": "ฐ",
            "]": "ล",
            "\\": "ฃ",
            "|": "ฅ",
            "a": "ฟ",
            "A": "ฤ",
            "s": "ห",
            "S": "ฆ",
            "d": "ก",
            "D": "ฏ",
            "f": "ด",
            "F": "โ",
            "g": "เ",
            "G": "ฌ",
            "h": "้",
            "H": "็",
            "j": "่",
            "J": "๋",
            "k": "า",
            "K": "ษ",
            "l": "ส",
            "L": "ศ",
            ";": "ว",
            ":": "ซ",
            "": "ง",
            "\"": ".",
            "z": "ผ",
            "Z": "(",
            "x": "ป",
            "X": ")",
            "c": "แ",
            "C": "ฉ",
            "v": "อ",
            "V": "ฮ",
            "b": "ิ",
            "B": "ฺ",
            "n": "ท",
            "N": "์",
            "m": "ท",
            "M": "?",
            "`": "ม",
            "<": "ฒ",
            ".": "ใ",
            ">": "ฬ",
            "/": "ฝ",
            "?": "ฦ"
          }

          var txt = document.getElementById("raw").innerHTML
          var result = ""
          for (var i in txt) {
            result += x[txt[i]]
          }
          document.getElementById("convert").innerHTML = result
      </script>
  </body>
</html>
