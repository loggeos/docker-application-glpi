FROM mariadb:latest
MAINTAINER stagiaire@devops-afpa.fr

ENV MYSQL_ROOT_PASSWORD BigPassword
ENV MYSQL_USER glpi_admin
ENV MYSQL_PASSWORD GlpiAdminPassWd
ENV MYSQL_DATABASE glpidb

ADD load_init.sql /docker-entrypoint-initdb.d

