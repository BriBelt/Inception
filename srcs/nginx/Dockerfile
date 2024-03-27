FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl && \
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

CMD 
