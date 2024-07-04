<?php
/**
 * Setting a message when the data is added.
 * @param {string} message The content of the message.
*/
function set_message($message){
    $_SESSION['message'] = $message;
    //$_SESSION['guestName'] = $guestName;
}

/**
 * Retrieving and showing the message and the guest name.
 * When it displays the message, it removes the message.
*/
function get_message(){
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-" role="alert">' .$_SESSION['message'] .'</div>';
        unset($_SESSION['message']);
    }
}
?>