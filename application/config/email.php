<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// mail
/*
$config['protocol'] = 'mail';
$config['charset'] =  'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = 'TRUE';
*/

// SMTP
$config['protocol'] = 'mail';
$config['charset'] =  'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = 'TRUE';
$config['smtp_hosy'] = 'ssl://smtp.googlemail.com'
$config['smtp_user'] = 465 
$config['smtp_port'] = 'meu email'
$config['smtp_pass'] ='senha'
$config['newline'] = "\r\n";