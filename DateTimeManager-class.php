<?php

class DateTimeManager
{
    // Property to store the current date and time in the server's time zone
    private $now;

    // Constructor to initialize the $now property
    public function __construct()
    {
        $this->now = new DateTime('now', new DateTimeZone('UTC'));
    }

    // Method to get the current date and time in epoch format
    public function getCurrentEpoch()
    {
        return $this->now->getTimestamp();
    }

    // Method to convert a date and time in the user's time zone to epoch format in UTC
    public function userToUTC($epoch, $timezone)
    {
        $date = new DateTime();
        $date->setTimestamp($epoch);
        $date->setTimezone(new DateTimeZone($timezone));
        return $date->getTimestamp();
    }

    // Method to convert a date and time in epoch format in UTC to the user's time zone
    public function UTCToUser($epoch, $timezone)
    {
        $date = new DateTime();
        $date->setTimestamp($epoch);
        $date->setTimezone(new DateTimeZone($timezone));
        return $date->getTimestamp();
    }
}

?>
