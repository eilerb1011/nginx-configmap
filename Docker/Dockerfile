# Use an official Nginx image as the base image
FROM nginx:latest

# Copy your HTML file to the appropriate location in the container
COPY index.php /usr/share/nginx/html/

# Copy the Nginx configuration files
COPY nginx-http.conf /etc/nginx/conf.d/default.conf
COPY nginx-ssl.conf /etc/nginx/conf.d/default-ssl.conf

# Expose ports 80 and 443
EXPOSE 80 443

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
