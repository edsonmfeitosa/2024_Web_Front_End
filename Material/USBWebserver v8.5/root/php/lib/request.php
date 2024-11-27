<?php
/**
 *
 */
// Define application credentials for Staging environment
define('API_KEY', 'zxzCR5TUqpWdhvlb');
define('API_SECRET', '9wRa3JQUAyRv3X9Ae26QFsVP');
define('BASE_URL', 'https://web-stage.voxy.com/partner_api');

// Local development credentials (Debug):
// define('API_KEY', 'API_KEY_PHOENIX');
// define('API_SECRET', 'API_SECRET_PHOENIX');
// define('BASE_URL', 'http://localhost:8000/partner_api');

/**
 * define your user's credentials here.
 * NOTICE: You cannot create duplicate users.
 * SOLUTION: Change the user id every time you are creating a new user.
 */

/**
 * Returns a sha256 of your api scecret/payload.
 */
function generate_signature($params) {
    ksort($params);
    $to_hash = http_build_query($params);
    return hash("sha256", API_SECRET . $to_hash);
}

/**
 * Prepares the request headers
 */
function generate_header($signature) {
    $key = API_KEY;
    return array(
        "AUTHORIZATION: Voxy {$key}:{$signature}",
    );
}

/**
 * Returns necessary request headers.
 */
function sign_request($params) {
    $signature = generate_signature($params);
    $headers = generate_header($signature);
    return $headers;
}

/**
 * Makes the necessary Web Service request.
 */
function make_request($endpoint, $method='GET', $params=array()) {
    $curl = curl_init();

    //Add URL Params if it is a GET
    if($method == 'GET' && !empty($params)) {
        $params_url = '';
        foreach($params as $key=>$value){
            $params_url .= $key.'='.$value.'&';
        }
        $params_url = trim($params_url, '&');
        curl_setopt($curl, CURLOPT_URL, BASE_URL.$endpoint.'?'.$params_url);
    } else {
        curl_setopt($curl, CURLOPT_URL, BASE_URL.$endpoint);
    }

    curl_setopt($curl, CURLOPT_VERBOSE, 0);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // POST and PUT requests have a payload
    if($method == 'POST' || $method == 'PUT') {
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    }

    // Setup the request headers
    $headers = sign_request($params);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    echo "$method : $endpoint\n";

    $response_content = curl_exec($curl);
    $response_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    echo("Status : " . $response_status_code . "\n");
    echo("Body : " . $response_content . "\n");

    // Close curl connection
    curl_close($curl);

    $response = array(
        'status_code' => $response_status_code,
        'content' => $response_content
    );

    return $response;
}
?>
