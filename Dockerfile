FROM richarvey/nginx-php-fpm:latest
ENV WEBROOT /var/www/html/public
COPY  . .

#docker image build -t api .
