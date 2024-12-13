<?php 

if ( ! function_exists('Validate_email')){

    function Validate_email($email){
       return App\Helpers\Email::ValidateEmail($email);
    }

}