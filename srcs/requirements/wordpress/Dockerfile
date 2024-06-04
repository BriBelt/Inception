FROM debian:bullseye

# Installing all the necessary packages: PHP,
# and other utilities.
RUN apt update && apt install -y php \
	php-mysql php-fpm php-curl php-gd php-intl \
	php-mbstring php-soap php-xml php-fpm \
	php-xmlrpc php-zip wget unzip && apt-get clean && \
	rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Use wget to download from the internet 
# Here we are getting WP-CLI which will help us with with the use
# of commands in order to make modifications to the web without
# the need of accessing it directly through the web.
RUN wget -q -O /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x /usr/local/bin/wp

RUN wget https://wordpress.org/latest.tar.gz && \
    tar -xzf latest.tar.gz && \
    mkdir -p /var/www/html && \
    mv wordpress/* /var/www/html/ && \
    rm -rf latest.tar.gz wordpress

# Set the correct permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose HTTP port
EXPOSE 80

# Set the entrypoint script
CMD ["php-fpm", "-F"]
