#!/bin/bash
htpasswd -bc /etc/nginx/conf.d/.htpasswd $user $htpass 
service nginx start
php-fpm
