#!/bin/bash
# http://www.newmediacampaigns.com/blog/docker-for-php-developers

docker run \
    -d \
    -p 8080:80 \
    -v $(pwd)/src/vhost.conf:/etc/nginx/sites-enabled/vhost.conf \
    -v $(pwd)/src:/var/www \
    tutorial/nginx;
