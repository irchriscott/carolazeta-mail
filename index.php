<?php

require_once('./vendor/autoload.php');

use Postmark\PostmarkClient;

$client = new PostmarkClient('c1943d94-28ce-4a84-8632-054750c2b55e');

$result = $client->sendEmail(
    "hello@zetasistemi.org",
    "d.bentura@carolazeta.com",
    "My test email from Postmark",
    "Hello Mr. Benturahere,\nHere is my email sent from postmark APIs using PHP.\n\nBest regards,\nChristian Lurhakwa"
);

echo "Email Sent !";