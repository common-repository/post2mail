<?php
// Settings
$sendHTML = false;

// Change this to change what the link says.
$linktext = 'View this post on my blog';

/* recipients */

// Send the post to these addresses
// Uncomment the next line and duplicate to send to multiple addresses
//$to  .= "mary@example.com" . ", " ; // note the comma
$to .= "you@email.com";

// CC the post to these addresses
// Uncomment the next line and duplicate to send to multiple addresses
//$cc  .= "mary@example.com" . ", " ; // note the comma
$cc .= "you@email.com";

// BCC the post to these addresses
// Uncomment the next line and duplicate to send to multiple addresses
//$bcc  .= "mary@example.com" . ", " ; // note the comma
$bcc .= "you@email.com";

//Set this to the address you are sending from
$from = "you@email.com";

function addMailLinkBack($postID) {
	global $linktext;
	$permalinkURL = get_permalink($postID);

	$text = '';
	$text = '<p><font size=-1><a href="' . $permalinkURL . '">' . $linktext . '</a></font></p>';
	// Uncomment the line 'return;' if you do not want a link back to your
	// blog in the e-mail
	// return;
	return $text;
}
?>