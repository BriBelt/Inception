FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl && \
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj "CN=$DOMAIN_NAME/C=EU/ST=Madrid" \
	-keyout /etc/ssl/private/rootKey.key \
	-out /etc/ssl/certs/rootCert.crt

COPY files/default /etc/nginx/sites-available/default
COPY files/index.html /usr/share/nginx/html/index.html

EXPOSE 80

CMD ["/usr/sbin/nginx", "-g", "daemon off;"] 
