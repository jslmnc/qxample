<?php

$planID=$_GET['planID'];
//$token=$_GET['access_token'];
$token=getAuthToken();

function getAuthToken(){

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/oauth2/token');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
  curl_setopt($ch, CURLOPT_USERPWD, 'ASnTwn2tO5vojqMccLPBCcE41aNplU7bG0Iw8iBmstXtXX2RA-SmxjW_jAQWLm06BT2HkvkOgnU6-fu9' . ':' . 'EJv270fVl2JzO46JIKNnCgBRRPn-xzkxoNrqIjG7w-uUUI0kPaNV2aY72dL5Rb2eDCRMsmwXRV4dXK_3');
  
  $headers = array();
  $headers[] = 'Accept: application/json';
  $headers[] = 'Accept-Language: en_US';
  $headers[] = 'Content-Type: application/x-www-form-urlencoded';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  $result = curl_exec($ch);
  $err=curl_error($ch);
  curl_close($ch);
  
  
  if($err){
  
      echo ' error: '.$err;
  
  }
  else{
  
      $response=json_decode($result);
  
     $response=json_decode($result,true);
  
      return $response['access_token'];
  
  }
  

}

//echo getAuthToken();


?>


<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
</head>

<body>
  <script src="https://www.paypal.com/sdk/js?client-id=ASnTwn2tO5vojqMccLPBCcE41aNplU7bG0Iw8iBmstXtXX2RA-SmxjW_jAQWLm06BT2HkvkOgnU6-fu9&vault=true&intent=subscription">
  </script>

<script> var token = "<?php echo $token;?>";</script>
  <div id="paypal-button-container"></div>

    <script>
      paypal.Buttons({
        createSubscription: function(data, actions) {
          return actions.subscription.create({
            'plan_id': '<?php echo $planID;?>' // Creates the subscription
          });
        },
        onApprove: function(data, actions) {
          alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
            window.location="sub_details.php?subscriptionID="+data.subscriptionID+"&access_token="+token;
        }
      }).render('#paypal-button-container'); // Renders the PayPal button
    </script>
  </body>
</html>

