<?php


/**
 * This example script shows how to get all users from an organization.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

/**

/**
 * Get all Users information
 */
make_request("/partners/users/", "GET");

?>
