<?php
include_once '../Logic.php';

switch ($_REQUEST['action']) {

    case 'get_google_feed':

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=google_feed.csv');
        echo Logic::getGoogleFeed();
        break;

    default:

        http_response_code(400);

}
