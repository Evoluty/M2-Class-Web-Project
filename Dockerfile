FROM mklkj/php-node-composer-npm
ADD . .
RUN cp .env.example .env && composer install && npm install && npm run prod && php artisan key:generate && php artisan migrate:fresh
ENTRYPOINT php artisan serv --host=0.0.0.0 --port=8000
EXPOSE 8000
