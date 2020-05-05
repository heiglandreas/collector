FROM php:7.4-cli-alpine
MAINTAINER andreas@heigl.org

WORKDIR /data

ENTRYPOINT ["/usr/local/bin/php", "-S", "0.0.0.0:80", "-f", "/data/index.php"]
