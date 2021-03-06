<?php

if(!isset($_SESSION))
    session_start();

function flash($name = '', $message = '', $class = 'form-message form-message-red')
{
    if ($class = 'red')
        $class = 'form-message form-message-red';

    if (!empty($name))
        if (!empty($message) && empty($_SESSION[$name])) {
            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div> <br>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
}

function redirect($location)
{
    header("location: {$location}");
    exit();
}