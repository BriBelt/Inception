FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl && \
	apt-get install -y gettext-base && \
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj "/CN=${DOMAIN_NAME}/C=EU/ST=Madrid" \
	-keyout /etc/ssl/private/rootKey.key \
	-out /etc/ssl/certs/rootCert.crt

COPY files/default /etc/nginx/conf.d/
COPY files/index.html /usr/share/nginx/html/index.html

RUN envsubst < /etc/nginx/conf.d/default > /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"] 
