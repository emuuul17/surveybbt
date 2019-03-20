<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
 
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.mailgun.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'postmaster@sandboxb109992dbdaa4c31b545e69101c6b46f.mailgun.org';//ini username anda.
$config['smtp_pass'] = 'f9d93c029f81b4f9fa1fef8d3e60798e-3939b93a-e8919f99';//ini password smtp anda.
$config['smtp_timeout'] = '4';
$config['crlf'] = '\n';
$config['newline'] = '\r\n';