
container_php       = app
container_server    = webserver

#####################################
###                               ###
###       Work in containers      ###
###                               ###
#####################################

start: #start docker containers @docker-compose up -d
	@docker-compose up -d

stop: #stop docker containers
	@docker-compose down

show: #show docker's containers
	@sudo docker ps

connect_app: #Connect to APP container
	@docker-compose exec $(container_php) bash

connect_app_root: #Connect to APP container
	@docker-compose exec --user root $(container_php) bash

connect_server: #Connect to container_server container
	@docker-compose exec $(container_server) /bin/sh