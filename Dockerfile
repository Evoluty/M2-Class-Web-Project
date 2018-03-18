FROM mklkj/php-node-composer-npm
ADD . .
COPY .env.example .env
RUN composer install && npm install && npm run prod && php artisan key:generate
ENTRYPOINT php artisan serv --port=80
EXPOSE 80
