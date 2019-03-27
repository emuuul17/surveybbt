<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
 
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.mailgun.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'postmaster@sandbox6cc8ad21fe9a4643aa11e892623220c4.mailgun.org';//ini username anda.
$config['smtp_pass'] = '3451cc68aedac82c0b584ce38547651f-e51d0a44-b7627bfc';//ini password smtp anda.
$config['smtp_timeout'] = '4';
$config['crlf'] = '\n';
$config['newline'] = '\r\n';