<?php
function get_status_message($status)
{
    switch ($status) {
        case 1:
            return '<span class="error-message">Invalid Credentials</span>';
        case 2:
            return '<span class="error-message">Fields cannot be empty</span>';
        case 3:
            return '<span class="success-message">Sign up successful. Please log in to continue.</span>';
        case 4:
            return '<span class="error-message">Password and confirm password not matched.</span>';
        case 5:
            return '<span class="error-message">Old password not matched.</span>';
        case 6:
            return '<span class="success-message">Password updated successfully.</span>';
        case 7:
            return '<span class="success-message">Profile info updated successfully.</span>';
        default:
            return '<span class="error-message">Unknown error occurred</span>';
    }
}
?>