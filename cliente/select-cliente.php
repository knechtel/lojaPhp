<?php
// required headers
require_once('../conecta.php');
require_once('../banco-cad-os.php');


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  


$product_arr = listaClientes($conexao);
http_response_code(200);
  
// make it json format
echo json_encode($product_arr);