<?php
    require 'vendor/autoload.php';
    use Plivo\RestAPI;
    $auth_id = "MAMWYYYZLJNTVLYJMYYJ";
    $auth_token = "MWQzZDZkZTU1OTc1OGY5N2IyYTJjYTdiNDIwYmQz";

    
    $p = new RestAPI($auth_id, $auth_token);
    // Send a message
    $params = array(
            'src' => '7772823928', // Sender's phone number with country code
            'dst' => '+919009472525', // Receiver's phone number with country code
            'text' => 'Hi, Message from Plivo' // Your SMS text message
            //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
            //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
        );
    // Send message
    $response = $p->send_message($params);
    // Print the response
    echo "Response : ";
    print_r($response['response']);
    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";
    // Print the Message UUID
    echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";
?>
