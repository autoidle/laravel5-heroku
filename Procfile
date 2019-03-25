web: composer warmup && $(composer config bin-dir)/heroku-php-nginx -C nginx.conf public/
scheduler: php -d memory_limit=512M artisan schedule:daemon
release: php artisan migrate --force && php artisan cache:clear
