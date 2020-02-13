FROM alpine:latest

LABEL Maintainer="reshet <reshet@itsyndicate.org>" \
      Description="Frontend for enot32.ru server"

RUN apk --update add nginx php7-fpm curl supervisor

COPY etc /etc

VOLUME /var/www/updates

WORKDIR /var/www/html

COPY --chown=nobody public /var/www/html

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1/fpm-ping
