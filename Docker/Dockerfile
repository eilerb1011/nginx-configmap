# Use an official PHP image as the base image
FROM php:8.2-fpm
RUN apt-get update && apt install -y nginx && apt install -y apache2-utils
# Copy your HTML file to the appropriate location in the container
COPY index.php /var/www/html/
COPY phpinfo.php /var/www/html/
RUN chown www-data:www-data /var/www/html/
RUN touch /etc/nginx/conf.d/.htpasswd
# Copy the Nginx configuration files
COPY nginx-http.conf /etc/nginx/sites-enabled/default
COPY entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh
# Expose ports 80 
EXPOSE 80
# Start Nginx & PHP
ENTRYPOINT ["/etc/entrypoint.sh"]
