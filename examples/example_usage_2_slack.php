<?php

/**
* Example Slack 2
*
* This will Send an Event Created by the SlackWebhook
*  and send it by calling the Static function in WebhookCoordinator to Send the Single Event.
*
* This Example Connects to Slack and Sends a Message With an Attachment.
*/

require_once("../vendor/autoload.php");

use nhalstead\Facilitator\Facilitator;
use nhalstead\Facilitator\Endpoints\SlackWebhook;
use nhalstead\Facilitator\Endpoints\SlackPack\SlackAttachments;

// Create a New Event
$newEvent = new SlackWebhook("[SLACK WEBHOOK]");

// Create Attachment for the Message
$attachment = new SlackAttachments();
$attachment->title("Something");
$attachment->image_url("http://i.imgur.com/OJkaVOI.jpg?1");

// Add the Attachment to the Message
$newEvent->addAttachment($attachment);

// Start a Queue Worker
// Add the New Event to The Queue
$queue = new Facilitator();
$queue->addEvent($newEvent);
$queue->sendEvents();

?>
