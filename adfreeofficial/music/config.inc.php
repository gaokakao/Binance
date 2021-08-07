<?php
$cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$i = 0;

$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

$cfg['ShowAll'] = true;

$cfg['MaxRows'] = 500;

$cfg['DefaultLang'] = 'en';

// $cfg['LoginCookieValidity'] = 3600 * 9;


 $cfg['LoginCookieValidity'] = 1;

// $cfg['LoginCookieValidity'] = 1800;