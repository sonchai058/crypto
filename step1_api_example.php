<?php
include('_inc.php');
header('Content-Type: application/json');

$start=1;
if(isset($_GET['start'])){
  $start = $_GET['start'];
}
$limit=5000;
if(isset($_GET['limit'])){
  $limit = $_GET['limit'];
}

$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => $start,
  'limit' => $limit,
  'convert' => 'THB'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: b01e9ff8-012c-4796-880a-6718e63ed128'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
print_r(json_decode($response)); // print json decoded response

$rs = json_decode($response);

//

foreach ($rs->data as $key=>$data) {
  $row_insert = query("insert into dataImport (label,data,price) values('".$data->symbol."','".json_encode($data)."',{$data->quote->THB->price})");
}

//
die();

//
$coin_system = query("SELECT coin FROM `port` WHERE sts=1 group by coin");
if ($coin_system->num_rows > 0) {
  while($row = $coin_system->fetch_assoc()) {
    
    foreach ($rs->data as $key=>$data) {
      if($row['coin']==$data->symbol) {
        $row_insert = query("insert into dataImport (label,data,price) values('".$data->symbol."','".json_encode($data)."',{$data->quote->THB->price})");
        break;
      }
    }

  }
}
//

echo json_encode(curl_close($curl)); // Close request




?>