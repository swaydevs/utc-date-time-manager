<?php

include('DateTimeManager-class.php');

$manager = new DateTimeManager();

// Get the current date and time in epoch format
echo $manager->getCurrentEpoch();

// Convert a date and time in the user's time zone (America/New_York) to epoch format in UTC
echo $manager->userToUTC(1555394800, 'America/New_York');

// Convert a date and time in epoch format in UTC to the user's time zone (America/New_York)
echo $manager->UTCToUser(1555394800, 'America/New_York');

?>
