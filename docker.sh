#!/bin/bash -eu
export MYSQL_ROOT_PASSWORD=webserver
export MYSQL_DATABASE=webserver
export MYSQL_USER=webserver
export MYSQL_PASSWORD=webserver
export PHPMYADMIN_HOST_PORT=7301
export HOST_PORT=7305
export PROJECT_PATH=./site

# Nazwa projektu
export PROJECT_NAME=dev_enviroment

envsubst < docker-compose.yaml | docker-compose --project-name ${PROJECT_NAME} -f - $@

