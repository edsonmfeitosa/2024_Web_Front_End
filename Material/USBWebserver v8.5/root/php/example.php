<?php
/**
 * This example script walks through the creation of a new user and
 * accessing all endpoints.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

$external_user_id = time();
$first_name = "Bob";
$email_address = "bob+{$external_user_id}@example.com";
$native_language = "en";
$invalid_native_language = "yy";

/**
 * Get User information
 */
echo "\n\n\nAttempts to get user information for the not yet created user\n";
make_request("/partners/users/{$external_user_id}/auth_token", "GET");


/**
 * CREATE INVALID USER
 * passing in an invalid language code returns a 400
 */
echo "\n\n\nCreates a user with an invalid language\n";
$params = array(
    'email_address' => $email_address,
    'first_name' => $first_name,
    'native_language' => $invalid_native_language
);
make_request("/partners/users/{$external_user_id}2", "POST", $params);


/**
 * Get Supported Languages
 **/
echo "\n\n\nLists supported languages\n";
make_request("/supported_languages", "GET");


/**
 * CREATE USER
 */
echo "\n\n\nCreates a valid user\n";
$params = array(
    'email_address' => $email_address,
    'first_name' => $first_name,
    'native_language' => $native_language,
    'expiration_date' => '2100-01-01',
    'phone_number' => '+19177151234'
);
make_request("/partners/users/{$external_user_id}", "POST", $params);


/**
 * Get User information
 */
echo "\n\n\nGets a valid user's information\n";
make_request("/partners/users/{$external_user_id}", "GET");


/**
 * SET USER PREMIUM EXPIRATION DATE
 */
echo "\n\n\nSets user premium expiration date\n";
$params = array(
    'expiration_date' => "2020-01-01"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);


/**
 * UPDATE USER NATIVE LANGUAGE
 */
echo "\n\n\nUpdates user's native language\n";
$params = array(
    'native_language' => "de"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);


/**
 * UPDATE USER PHONE NUMBER
 */
echo "\n\n\nUpdates user's phone number\n";
$params = array(
    'phone_number' => "+822-678-4325"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);


/**
 * GET USER LOGIN URL
 */
echo "\n\n\nGets user's login url\n";
make_request("/partners/users/{$external_user_id}/auth_token", "GET");


/**
 * ADD ENTITLEMENTS
 */
$params = array(
    'credits' => 99
);
echo "\n\n\nAdds entitlements (tutoring credits) to user\n";
make_request("/partners/users/{$external_user_id}/entitlements", "POST", $params);


/**
 * Get User information
 */
echo "\n\n\nGets user information\n";
make_request("/partners/users/{$external_user_id}", "GET");


// Segment Label
$segment_label = time();

/**
 * Create Organization Segment
 *
 */
echo "\n\n\nCreates organization segment\n";
$params = array(
    'label' => $segment_label
);
make_request("/partners/segments/", "POST", $params);


/**
 * Get One Organization Segment
 */
echo "\n\n\nGets one organization segment\n";
make_request("/partners/segments/{$segment_label}", "GET");


/**
 * Get All Organization Segments
 */
echo "\n\n\nGets all organization segments\n";
make_request("/partners/segments/", "GET");


/**
 * Add user to segment
 *
 */
echo "\n\n\nAdds user to segment\n";
$params = array();
make_request("/partners/segments/{$segment_label}/users/{$external_user_id}", "POST", $params);
make_request("/partners/segments/{$segment_label}", "GET");

/**
 * Add user to a non-existing segment
 *
 */
echo "\n\n\nAdds user to a non-existing segment\n";
$params = array();
make_request("/partners/segments/{$segment_label}new/users/{$external_user_id}", "POST", $params);
make_request("/partners/segments/{$segment_label}new", "GET");

/**
 * Show units for users in a segment
 *
 */
echo "\n\n\nGets units for all users in a segment\n";
make_request("/partners/segments/{$segment_label}/users/units", "GET");

/**
 * Show group sessions for a segment
 *
 */
echo "\n\n\nGets group sessions for all users in a segment\n";
make_request("/partners/segments/{$segment_label}/users/group_sessions", "GET");


/**
 * Remove user from segment
 *
 */
echo "\n\n\nRemoves user from segment\n";
make_request("/partners/segments/{$segment_label}/users/{$external_user_id}", "DELETE");
make_request("/partners/segments/{$segment_label}", "GET");


echo "\n\n\nGets user's information\n";
make_request("/partners/users/{$external_user_id}", "GET");


/***
 * Set user access type
 * valid values are: "wse-show-gift", "wse-trial", "wse-premium"
 */
echo "\n\n\nSets user access type:\n";

echo "\n\n\n When access_type is wse-show-gift\n";
$params = array(
    'access_type' => 'wse-show-gift'
);
make_request("/partners/users/{$external_user_id}/access_type", "PUT", $params);
make_request("/partners/users/{$external_user_id}", "GET");

echo "\n\n\n When access_type is wse-trial\n";

$params = array(
    'access_type' => "wse-trial"
);
make_request("/partners/users/{$external_user_id}/access_type", "PUT", $params);
make_request("/partners/users/{$external_user_id}", "GET");

echo "\n\n\n When access_type is wse-premium\n";

$params = array(
    'access_type' => "wse-premium"
);
make_request("/partners/users/{$external_user_id}/access_type", "PUT", $params);
make_request("/partners/users/{$external_user_id}", "GET");

echo "\n\n\n When access_type is empty\n";

$params = array(
    'access_type' => null
);
make_request("/partners/users/{$external_user_id}/access_type", "PUT", $params);
make_request("/partners/users/{$external_user_id}", "GET");

echo "\n\n\nErrors when access_type is invalid\n";
$params = array(
    'access_type' => 'not-valid'
);
make_request("/partners/users/{$external_user_id}/access_type", "PUT", $params);


/**
 * Get User Units
 */
echo "\n\nGet User Units\n";
make_request("/partners/users/{$external_user_id}/units", "GET");/**

 * Reset User Units
 */
echo "\n\nReset User Units to defaults\n";
make_request("/partners/users/{$external_user_id}/units", "POST");
?>
