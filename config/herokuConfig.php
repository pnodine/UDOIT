<?php

$debug            = getenv("DEBUG");

/* This tests to see if the user came from something other than the URL of your LMS */
$referer_test     = getenv('REFERER_TEST');

/* Set the path for the base directory (where the user will start choosing from) */
$base_url         = getenv('BASE_URL'); // Without trailing slash

/* Oauth 1.0 Settings (For use when installing the app in Canvas) */
$consumer_key     = getenv('CONSUMER_KEY');
$shared_secret    = getenv('SHARED_SECRET');

/* Oauth 2.0 Settings (Provided by Instructure) */
$oauth2_id        = getenv('OAUTH2_ID');
$oauth2_key       = getenv('OAUTH2_KEY');
$oauth2_uri       = getenv('OAUTH2_URI');

/* Database Config */

$db_url           = parse_url(getenv('DATABASE_URL'));
$db_type          = 'pgsql';
$db_host          = $db_url['host'];
$db_name          = substr($db_url['path'], 1);
$db_user          = $db_url['user'];
$db_password      = $db_url['pass'];
$db_port          = $db_url['port'];
$db_user_table    = 'user';
$db_reports_table = 'reports';

$dsn = "pgsql:host={$db_host};dbname={$db_name};user={$db_user};port={$db_port};sslmode=require;password={$db_password}";


/* Disable headings check character count */
$doc_length       = getenv('DOC_LENGTH');

/* Google/YouTube Data Api Key */
define( 'GOOGLE_API_KEY', getenv('GOOGLE_API_KEY'));