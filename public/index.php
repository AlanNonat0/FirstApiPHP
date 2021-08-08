<?php

require __DIR__ . "/../vendor/autoload.php";

header("content-type: application/json");

# 1 - way to get url with .htacess
// $url = explode("/", $_GET['url']);

# 2 - way to get url
// $url2 = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
// $url2 = array_filter(explode('/', $url2));

# 3 - way to get url with array
$url = array_values(array_filter(explode("/", $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL)));
array_shift($url);

if (strtolower($url[0]) === 'api') {

    $service = '\Api\service\\'.ucfirst($url[1]).'Service';
 
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    try {
        
        $response = call_user_func_array(
            array(new $service, $method),
            [
                isset($url[2])? $url[2] : null,

            ]

        );
        
        http_response_code(200);
        echo json_encode(['status' => 'success', 'data' => $response]);
        exit;
    } catch (\Exception $e) {
        http_response_code(404);
        echo json_encode(['status' => 'error', 'data' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
        exit;
    }

}
