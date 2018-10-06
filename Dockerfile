FROM richarvey/nginx-php-fpm:latest
ENV WEBROOT /var/www/html/public
COPY  . .
RUN chmod 755 setup_database.sh

#docker image build -t api .
