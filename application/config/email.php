<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
 
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.mailgun.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'postmaster@sandbox66386da546e4423b9ee1c1a01f7aeb6a.mailgun.org';//ini username anda.
$config['smtp_pass'] = '08dc71e9c931f36c2dcca226a58e4f3c-985b58f4-4d5bc7e7';//ini password smtp anda.
$config['smtp_timeout'] = '4';
$config['crlf'] = '\n';
$config['newline'] = '\r\n';