up:
	docker-compose up --build

start: 
	docker-compose up-d

stop:
	docker-compose down

restart:
	docker-compose down && docker-compose up --build

logs:
	docker-compose logs -f php-app

ps: 
	docker-compose ps

sh:
	docker-compose exec php-app bash
