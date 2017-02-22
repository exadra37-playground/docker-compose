# http://www.newmediacampaigns.com/blog/docker-for-php-developers
# We will extend to an Image phusion/baseimage with tools to operate on the container
FROM phusion/baseimage
MAINTAINER Exadra37 <exadra37@gmail.com>

# Execute command from phusion/baseimage
CMD ["/sbin/my_init"]

RUN apt-get update && apt-get install -y python-software-properties
RUN add-apt-repository ppa:nginx/stable
RUN apt-get update && apt-get install -y nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# redirect nginx access log to the container standard output
RUN ln -sf /dev/stdout /var/log/nginx/access.log

# redirect nginx error log to the container standard error output
RUN ln -sf /dev/stderr /var/log/nginx/error.log

# copy start.sh to the container so that phusion/baseimage can invoke it
RUN mkdir -p /etc/service/nginx
ADD start.sh /etc/service/nginx/run
RUN chmod +x /etc/service/nginx/run

EXPOSE 80

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
