<?php 

session_name('ourapp');
session_start([
    'cookie_domain' => '.st.com',
    'cookie_path' => '/'
]);

$_SESSION['data'] = 'Hello World';
//echo $_SESSION['data'];