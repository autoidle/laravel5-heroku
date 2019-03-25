web: composer warmup && $(composer config bin-dir)/heroku-php-nginx -C nginx.conf public/
release: php artisan migrate --force && php artisan cache:clear
