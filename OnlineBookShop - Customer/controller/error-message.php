<?php
function get_error_message($status)
{
    switch ($status) {
        case 1:
            return '<span class="error-message">Invalid Credentials</span>';
        case 2:
            return '<span class="error-message">Fields cannot be empty</span>';
        case 3:
            return '<span class="success-message">Sign up successful. Please log in to continue.</span>';
        default:
            return '<span class="error-message">Unknown error occurred</span>';
    }
}
?>