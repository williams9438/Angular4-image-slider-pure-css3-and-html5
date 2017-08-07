function slackChannel(){
    $channel  = 'channel';
    $bot_name = 'bot_name';
    $icon     = ':postbox:';
    $message  = 'message';

    $attachments = array(
        'fallback' => 'Lorem ipsum',
        'pretext'  => 'Lorem ipsum',
        'color'    => '#ff6600',
        'fields'   => array(

                'title' => 'Title',
                'value' => 'Lorem ipsum',
                'short' => true,
                'title' => 'Notes',
                'value' => 'Lorem ipsum',
                'short' => true

        )
    );

		
	$data = array(
		'channel'     => $channel,
		'username'    => $bot_name,
		'text'        => $message,
		'icon_emoji'  => $icon,
		'attachments' => $attachments
	);
	$data_string = json_encode($data);
	$ch = curl_init('https://hooks.slack.com/servihttps://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX');  
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		'Content-Type: application/json',                                                                                
		'Content-Length: ' . strlen($data_string))                                                                       
	); 

	$return = curl_exec($ch);

	print_r($return);
	curl_close($ch);
}
