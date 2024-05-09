<?php
function get_error_message($status) {
    switch ($status) {
        case 1:
            return '<span class="error-message">Invalid Credentials</span>';
            break;
        case 2:
            return '<span class="error-message">Fields cannot be empty</span>';
            break;
        case 3:
            return '<span class="error-message">Sign up successful. Please log in to continue.</span>';
            break;
        default:
            return '<span class="error-message">Unknown error occurred</span>';
            break;
    }
}
?>
