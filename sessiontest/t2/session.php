<?php 

session_name('ourapp');
session_start([
    'cookie_domain' => '.st.com',
    'cookie_path' => '/'
]);

$_SESSION['data2'] = 'HELLO EARTH';

//echo $_SESSION['data2'];