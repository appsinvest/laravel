FROM appscenter/larasuperdock:php8.3
LABEL Maintainer="appscenter <appscenter@proton.me>"
COPY . .

RUN composer install

EXPOSE 80
