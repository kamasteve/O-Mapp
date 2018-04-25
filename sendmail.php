<?php
$message1=rand(1234,9999);
$message=" Your Verification code is $message1 " ;
$GLOBALS['SMPP_ROOT'] = dirname(__FILE__); // assumes this file is in the root
require_once $GLOBALS['SMPP_ROOT'].'/protocol/smppclient.class.php';
require_once $GLOBALS['SMPP_ROOT'].'/protocol/gsmencoder.class.php';
require_once $GLOBALS['SMPP_ROOT'].'/transport/tsocket.class.php';

// Simple debug callback
function printDebug($str) {
	echo date('Ymd H:i:s ').$str."\r\n";
}

try {
	// Construct transport and client, customize settings
	$transport = new TSocket('10.21.7.180',5019,false,'printDebug'); // hostname/ip (ie. localhost) and port (ie. 2775)
	$transport->setRecvTimeout(10000);
	$transport->setSendTimeout(10000);
	$smpp = new SmppClient($transport,'printDebug');
	
	// Activate debug of server interaction
	$smpp->debug = true; 		// binary hex-output
	$transport->setDebug(true);	// also get TSocket debug
	
	// Open the connection
	$transport->open();
	$smpp->bindTransmitter("Test","1234");
	
	// Optional: If you get errors during sendSMS, try this. Needed for ie. opensmpp.logica.com based servers.
	//SmppClient::$sms_null_terminate_octetstrings = false;
	
	// Optional: If your provider supports it, you can let them do CSMS (concatenated SMS) 
    //SmppClient::$sms_use_msg_payload_for_csms = true;
	
	// Prepare message
	//$message = 'Thanks Tunya,Finnaly It has worked';
	$encodedMessage = GsmEncoder::utf8_to_gsm0338($message);
	$from = new SmppAddress(25420075);
	$to = new SmppAddress(254776976172,SMPP::TON_INTERNATIONAL,SMPP::NPI_E164);
	
	// Send
	$smpp->sendSMS($from,$to,$encodedMessage);
	
	// Close connection
	$smpp->close();
	
} catch (Exception $e) {
	// Try to unbind
	try {
		$smpp->close();
	} catch (Exception $ue) {
		// if that fails just close the transport
		printDebug("Failed to unbind; '".$ue->getMessage()."' closing transport");
		if ($transport->isOpen()) $transport->close();
	}
	
	// Rethrow exception, now we are unbound or transport is closed
	throw $e; 
}