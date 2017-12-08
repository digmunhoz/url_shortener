# Variables                                                                                                                                                   
PROJECT_NAME:=yourls

help: ; @ \
	clear; \
	echo ""; \
	echo "Usage instructions:"; \
	echo ""; \
	echo 'make build: \t\tCreate new development environment'; \
	echo 'make start: \t\tStart development environment previously created'; \
	echo 'make stop: \t\tStop development environment'; \
	echo 'make status: \t\tShow development environment'; \
	echo 'make restart: \t\tRestart development environment'; \
	echo 'make logs level=error \tShow development environment error logs'; \
	echo 'make logs level=access \tShow development environment access logs'; \
	echo 'make clean \t\tClean dangling volume and images from docker'; \
	echo "make help: \t\tHow to use make command";\
	echo ""; 


build: ; @\
	clear; \
	echo "[Building Development Environment...]"; \
	echo "";\
	docker-compose -p ${PROJECT_NAME} up --build --remove-orphans -d 

start: ; @\
	clear; \
	echo "[Starting Development Environment...]"; \
	echo "";\
	docker-compose -p ${PROJECT_NAME} up -d 

stop: ; @\
	clear; \
	echo "[Stopping Development Environment...]"; \
	echo "";\
	docker-compose -p ${PROJECT_NAME} down | true

status: ; @\
	clear; \
	echo "[Status...]"; \
	echo "";\
	docker-compose -p ${PROJECT_NAME} ps

clean: ; @\
	clear; \
	echo "[Cleaning Dangling images...]"; \
	echo "";\
	docker rmi -f `docker images -q -f dangling=true`; \
	echo "";\
	echo "[Cleaning Dangling volumes...]"; \
	echo "";\
	docker volume rm `docker volume ls -q -f dangling=true`

restart: stop start

logs: ; @\
	clear; \
	echo "[Generating environment logs...]"; \
	echo "";\
	docker-compose logs
