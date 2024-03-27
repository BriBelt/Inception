FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl && \
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY files/default /etc/nginx/sites-available/default
COPY files/index.html /usr/share/nginx/html/index.html

EXPOSE 80

CMD ["/usr/sbin/nginx", "-g", "daemon off;"] 
