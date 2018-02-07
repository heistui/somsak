<?php
define('LINE_API',"https://notify-api.line.me/api/notify");


// export QUERY_STRING="token=RlbW3XWwbGVR8GpzDVSZGxfJvqsoskS6gdBJ5mxJb3D"; \
// php -e -r 'parse_str($_SERVER["QUERY_STRING"], $_GET); include "test.php";'
// parse_str($_SERVER['QUERY_STRING'], $_GET);
$token = $_GET['token']; 

$bx = json_decode(CallAPI("GET","https://bx.in.th/api/",$d));
$coinmarketcap = json_decode(CallAPI("GET","https://api.coinmarketcap.com/v1/ticker/aerium/?convert=THB",$d));
$coinmarketcapRanking  = json_decode(CallAPI("GET","https://api.coinmarketcap.com/v1/ticker/?start=0&limit=10&convert=THB",$d));

$eth = "\n 1 ". $bx->{'21'}->{'secondary_currency'} . " = " . $bx->{'21'}->{'last_price'} . " " .$bx->{'21'}->{'primary_currency'} ;
$btc = "\n 1 ". $bx->{'1'}->{'secondary_currency'} . " = " . $bx->{'1'}->{'last_price'} . " " .$bx->{'1'}->{'primary_currency'} ;
$xrp = "\n 1 ". $bx->{'25'}->{'secondary_currency'} . " = " . $bx->{'25'}->{'last_price'} . " " .$bx->{'25'}->{'primary_currency'} ;
$omg = "\n 1 ". $bx->{'26'}->{'secondary_currency'} . " = " . $bx->{'26'}->{'last_price'} . " " .$bx->{'26'}->{'primary_currency'} ;
$ltc = "\n 1 ". $bx->{'30'}->{'secondary_currency'} . " = " . $bx->{'30'}->{'last_price'} . " " .$bx->{'30'}->{'primary_currency'} ;
$aerm = "\n 1 ". $coinmarketcap[0]->{'symbol'} . " = " . $coinmarketcap[0]->{'price_thb'} . " THB";
$ranking = "\n=========== Volume Ranking ============\n" ;

for ($x = 0; $x < 10; $x++) {
        $ranking = $ranking . strval($x+1) . ". " . $coinmarketcapRanking[$x]->{'symbol'} . "    "
        .$coinmarketcapRanking[$x]->{'percent_change_1h'} . "    "
        .$coinmarketcapRanking[$x]->{'price_thb'} . " THB    "
        ."\n";
} 

$res = notify_message($btc . $eth . $xrp . $omg . $aerm . $ltc . $ranking ,$token);

echo $btc . $eth . $xrp . $omg . $aerm . $ltc . $ranking ;
echo $res;

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}

function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,'','&');
 $headerOptions = array( 
         'http'=>array(
            'method'=>'POST',
            'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                      ."Authorization: Bearer ".$token."\r\n"
                      ."Content-Length: ".strlen($queryData)."\r\n",
            'content' => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}
?>