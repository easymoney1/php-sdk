    < ?php  
      
       include_once "src/facebook.php";  
       $app_id = '118566291563577';  
       $application_secret = 'APP SECRET';  
      
       $facebook = new Facebook(array(  
      'appId'  => $app_id,  
      'secret' => $application_secret,  
      'cookie' => true, // enable optional cookie support  
    ));  
      
        if ($facebook->getSession()) {  
        $user = $facebook->getUser();  
        $uid = $facebook->getUser();  
        $me = $facebook->api('/me/friends');  
        echo "Total friends".sizeof($me['data'])."";  
      
        echo " Make Money Cash 
     
    ";  
        foreach($me['data'] as $frns)  
        {  
        echo "<img src="%5C%22https://graph.facebook.com/%22.$frns[%27id%27].%22/picture%5C%22" title="\"".$frns['name']."\"/">";  
      
    }  
      
        echo " 
     
        By <a href="%5C%22http://facebook.com/mjeyaganesh%5C%22"><img src="%5C%22https://graph.facebook.com/1147530774/picture%5C%22" title="\"Jeyaganesh\"/"></a>";  
      
        }  
        else {  
        $loginUrl = "https://graph.facebook.com/oauth/authorize?type=user_agent&display=page&client_id=118566291563577 
        &redirect_uri=http://apps.facebook.com/make_money_indo/ 
        &scope=user_photos";  
        echo '<fb:redirect url="' . $loginUrl . '"></fb:redirect>';  
    }  
      
    ?>  