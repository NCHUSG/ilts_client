<?php

class Client {

    function index()
    {
        echo '<h1>INDEX PAGE</h1>';
        echo '<a href="./?m=login">Login</a>';
        return;
    }

    function login()
    {
        $is_login = isset($_SESSION['user_files']);
        if ( false ==  $is_login ) {
            header('Location: ' . BASE_URL . '?m=oauth');
        }
        else {
            header('Location: ' . BASE_URL . '?m=login_success');
        }
    }

    function oauth()
    {
        $key    = CLIENT_KEY;
        $secret = CLIENT_SECRET;
        $host   = HOST_URL;
        $scope  = SCOPE;

        # Here is the most important part about using this library.
        $client       = new IltOAuthClient($key, $secret, $host, $scope);
        $user_files   = $client->run();
        /////

        if ( $user_files === false ) {
            header('Location: ' . BASE_URL . '?m=login_failed');
        }
        else {
            $_SESSION['user_files'] = $user_files;

            // 避免SESSION尚未建立完成就轉址
            if (isset($_SESSION['user_files'])) {
                header('Location: ' . BASE_URL . '?m=login_success');
            }
        }

        return;
    }

    function login_failed()
    {
        echo '<h1>Login Failed</h1>';
        echo '<a href="./?m=index">Back to Index</a>';
        return;
    }

    function login_success()
    {
        if ( true == isset($_SESSION['user_files']) ) {
            echo '<!doctype html><html lang="en"><head><meta charset="UTF-8"></head><body>';
            echo '<h1>Login Success!</h1>';
            echo '<a href="./?m=logout">Logout</a>';
            echo '<p>The Following is the data which Client get from Provider:</p>';
            echo '<pre>';
            var_dump($_SESSION['user_files']);
            echo '</pre>';
            echo '</body></html>';

        }
        else {
            header('Location: ' . BASE_URL . '?m=index');
        }

        return;
    }

    function logout()
    {
        session_destroy();
        echo '<h1>Alredy Logout!</h1>';
        echo '<a href="./?m=index">Back to Index</a>';
        return;
    }

}
