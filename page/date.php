<?php
date_default_timezone_set('Asia/Manila');
$storeSchedule = [
    'Sun' => ['12:00 AM' => '12:00 AM'],
    'Mon' => ['09:00 AM' => '04:00 PM'],
    'Tue' => ['09:00 AM' => '04:00 PM'],
    'Wed' => ['09:00 AM' => '04:00 PM'],
    'Thu' => ['09:00 AM' => '04:00 PM'],
    'Fri' => ['09:00 AM' => '04:00 PM'],
    'Sat' => ['09:00 AM' => '04:00 PM']
];
$timestamp = time();

$currentTime = (new DateTime())->setTimestamp($timestamp);

foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

    $startTime = DateTime::createFromFormat('h:i A', $startTime);
    $endTime   = DateTime::createFromFormat('h:i A', $endTime);

    if (($startTime < $currentTime) && ($currentTime < $endTime)) {
        $status = '<span class="text-success">OPEN</span>';
        $msg = ': 9AM - 4PM';
        break;
    }
    else {
        $status = '<span class="text-danger">CLOSE</span>';
        $msg = " ";
    }
}
echo $status;
echo $msg;