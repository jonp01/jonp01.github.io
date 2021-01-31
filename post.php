<?php
date_default_timezone_set("America/Chicago");
$publishDate = $_POST["post-time"];
$currentDate = date("Y-m-d H:i:s");
$timeDiff = strtotime($publishDate) - strtotime($currentDate);
if ($timeDiff > 0) {
    sleep($timeDiff);
}
echo "On " . $currentDate . ", you wanted to post the following message on " . $publishDate . "<br>";
echo $_POST["message"];
?>