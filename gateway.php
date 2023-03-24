<?php

function config() {
    $config = array(
        'projectid' => "8531047163414172",
        // DO NOT SHARE YOUR TOKEN WITH ANYONE OUTSIDE THIS APP
        // DO NOT SHARE YOUR TOKEN WITH THEMIS SUPPORT
        // DO NOT SHARE YOUR TOKEN WITH YOUR MOTHER
        'token' => "OBPnMI5zueVmxa8qv6rL7vEUhetnybwlnwNuAxgRcVtw0eTP5e4RKWxIYLdRmu0pdAnG44HmvbUwYGT7DWk4IdGNsO7Mz5cJyYeeFcnINjGdKXVHlHfbkY9HRNCKikfJ"
    );
    return $config;
}

function element($key) {
    $json = file_get_contents('http://localhost/themisapi/element.php?projectid=' . config()['projectid'] . '&token=' . config()['token'] . '&element=' . $key);
    $obj = json_decode($json);
    return $obj;
}