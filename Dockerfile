FROM richarvey/nginx-php-fpm:latest
ENV WEBROOT /var/www/html/public
COPY  . .
#RUN chmod 755 setup_database.sh
RUN chmod 755 test.sh
RUN ./test.sh
#docker image build -t api .
