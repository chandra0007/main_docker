
FROM ubuntu

ARG DEF_PATH="/usr/share/nginx/html"
ARG UNAME="chandan"
ARG HTML_PATH="/var/www/html"

ENV H_NAME="nginx"


RUN 	apt-get update -y &&\
	apt-get install nginx -y &&\
	apt-get install net-tools -y &&\
	service nginx start &&\
	useradd -ms /bin/bash $UNAME &&\
	mkdir /$UNAME &&\
	mv $DEF_PATH/index.html $DEF_PATH/text.html &&\
        mv $HTML_PATH/index.nginx-debian.html $DEF_PATH/text.html 
		#RUN apt-get install curl -y

VOLUME /$UNAME

WORKDIR $DEF_PATH/ 

COPY index.html $HTML_PATH/ 

EXPOSE 80

WORKDIR /home/$UNAME

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
