deploy-dev:
    docker-compose -f docker/docker-compose.yml up -d --build nginx php-fpm workspace mysql
