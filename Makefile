# Forward ESL Docker Management
.PHONY: help build up down restart status logs clean shell-app shell-web shell-db shell-redis

# Default target
.DEFAULT_GOAL := help

# Docker Compose file
COMPOSE_FILE := docker-compose.yml

# Colors for output
GREEN := \033[0;32m
YELLOW := \033[0;33m
RED := \033[0;31m
NC := \033[0m # No Color

help: ## Show this help message
	@echo "$(GREEN)=====================================================$(NC)"
	@echo "$(GREEN)       Forward ESL Docker Management Commands$(NC)"
	@echo "$(GREEN)=====================================================$(NC)"
	@echo ""
	@echo "$(YELLOW)🐳 Docker Commands:$(NC)"
	@echo "  $(GREEN)make build$(NC)              Build all Docker images"
	@echo "  $(GREEN)make up$(NC)                 Start all services"
	@echo "  $(GREEN)make down$(NC)               Stop and remove all services"
	@echo "  $(GREEN)make restart$(NC)            Restart all services"
	@echo "  $(GREEN)make status$(NC)             Show status of all services"
	@echo "  $(GREEN)make rebuild$(NC)            Rebuild and restart all services"
	@echo "  $(GREEN)make clean$(NC)              Clean up Docker resources"
	@echo ""
	@echo "$(YELLOW)📝 Logs Commands:$(NC)"
	@echo "  $(GREEN)make logs$(NC)               Show logs from all services"
	@echo "  $(GREEN)make logs-app$(NC)           Show logs from app service"
	@echo "  $(GREEN)make logs-web$(NC)           Show logs from webserver"
	@echo "  $(GREEN)make logs-db$(NC)            Show logs from database"
	@echo "  $(GREEN)make logs-redis$(NC)         Show logs from redis"
	@echo ""
	@echo "$(YELLOW)🔧 Shell Access:$(NC)"
	@echo "  $(GREEN)make shell-app$(NC)          Access app container shell"
	@echo "  $(GREEN)make shell-web$(NC)          Access webserver container shell"
	@echo "  $(GREEN)make shell-db$(NC)           Access database container shell"
	@echo "  $(GREEN)make shell-redis$(NC)        Access redis container shell"
	@echo ""
	@echo "$(YELLOW)🚀 Laravel Commands:$(NC)"
	@echo "  $(GREEN)make install$(NC)            Install Laravel dependencies"
	@echo "  $(GREEN)make migrate$(NC)            Run Laravel migrations"
	@echo "  $(GREEN)make seed$(NC)               Run Laravel seeders"
	@echo "  $(GREEN)make fresh$(NC)              Fresh Laravel installation with migrations and seeds"
	@echo "  $(GREEN)make storage-link$(NC)       Create storage symbolic link"
	@echo "  $(GREEN)make clear-cache$(NC)        Clear all Laravel caches"
	@echo "  $(GREEN)make optimize$(NC)           Optimize Laravel for production"
	@echo ""
	@echo "$(YELLOW)🔐 Permissions & Deployment:$(NC)"
	@echo "  $(GREEN)make fix-permissions$(NC)         Fix storage permissions for production server"
	@echo "  $(GREEN)make fix-permissions-docker$(NC)  Fix storage permissions inside Docker container"
	@echo "  $(GREEN)make deploy$(NC)                  Deploy to production (Docker)"
	@echo "  $(GREEN)make deploy-server$(NC)           Deploy on production server (non-Docker)"
	@echo ""
	@echo "$(YELLOW)📦 NPM Commands:$(NC)"
	@echo "  $(GREEN)make npm-install$(NC)        Install npm dependencies"
	@echo "  $(GREEN)make npm-build$(NC)          Build frontend assets"
	@echo "  $(GREEN)make npm-dev$(NC)            Build frontend assets for development"
	@echo "  $(GREEN)make npm-watch$(NC)          Watch frontend assets for changes"
	@echo ""
	@echo "$(GREEN)=====================================================$(NC)"
	@echo "$(YELLOW)💡 Quick Start:$(NC)"
	@echo "  1. $(GREEN)make build$(NC)    - Build Docker images"
	@echo "  2. $(GREEN)make up$(NC)       - Start services"
	@echo "  3. $(GREEN)make migrate$(NC)  - Run migrations"
	@echo ""
	@echo "$(YELLOW)🛠️  Production Deployment:$(NC)"
	@echo "  • Docker: $(GREEN)make deploy$(NC)"
	@echo "  • Server: $(GREEN)make deploy-server$(NC)"
	@echo "$(GREEN)=====================================================$(NC)"

build: ## Build all Docker images
	@echo "$(GREEN)Building Docker images...$(NC)"
	docker compose -f $(COMPOSE_FILE) build

up: ## Start all services
	@echo "$(GREEN)Starting all services...$(NC)"
	docker compose -f $(COMPOSE_FILE) up -d
	@echo "$(GREEN)Services started successfully!$(NC)"
	@echo "$(YELLOW)Web server: http://localhost:20181$(NC)"
	@echo "$(YELLOW)PostgreSQL: localhost:20131$(NC)"
	@echo "$(YELLOW)Redis: localhost:6379$(NC)"

down: ## Stop and remove all services
	@echo "$(RED)Stopping all services...$(NC)"
	docker compose -f $(COMPOSE_FILE) down

restart: ## Restart all services
	@echo "$(YELLOW)Restarting all services...$(NC)"
	docker compose -f $(COMPOSE_FILE) restart
	@echo "$(GREEN)Services restarted successfully!$(NC)"

status: ## Show status of all services
	@echo "$(GREEN)Service Status:$(NC)"
	docker compose -f $(COMPOSE_FILE) ps

logs: ## Show logs from all services
	docker compose -f $(COMPOSE_FILE) logs -f

logs-app: ## Show logs from app service
	docker compose -f $(COMPOSE_FILE) logs -f app

logs-web: ## Show logs from webserver
	docker compose -f $(COMPOSE_FILE) logs -f webserver

logs-db: ## Show logs from database
	docker compose -f $(COMPOSE_FILE) logs -f db

logs-redis: ## Show logs from redis
	docker compose -f $(COMPOSE_FILE) logs -f redis

shell-app: ## Access app container shell
	@echo "$(GREEN)Accessing app container shell...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app /bin/bash

shell-web: ## Access webserver container shell
	@echo "$(GREEN)Accessing webserver container shell...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec webserver /bin/sh

shell-db: ## Access database container shell
	@echo "$(GREEN)Accessing database container shell...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec db psql -U forward_user -d forward_esl

shell-redis: ## Access redis container shell
	@echo "$(GREEN)Accessing redis container shell...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec redis redis-cli

clean: ## Clean up Docker resources
	@echo "$(RED)Cleaning up Docker resources...$(NC)"
	docker compose -f $(COMPOSE_FILE) down -v
	docker system prune -f
	@echo "$(GREEN)Cleanup completed!$(NC)"

rebuild: ## Rebuild and restart all services
	@echo "$(YELLOW)Rebuilding all services...$(NC)"
	docker compose -f $(COMPOSE_FILE) down
	docker compose -f $(COMPOSE_FILE) build --no-cache
	docker compose -f $(COMPOSE_FILE) up -d
	@echo "$(GREEN)Rebuild completed!$(NC)"

install: ## Install Laravel dependencies
	@echo "$(GREEN)Installing Laravel dependencies...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app composer install

migrate: ## Run Laravel migrations
	@echo "$(GREEN)Running Laravel migrations...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan migrate

seed: ## Run Laravel seeders
	@echo "$(GREEN)Running Laravel seeders...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan db:seed

fresh: ## Fresh Laravel installation with migrations and seeds
	@echo "$(GREEN)Fresh Laravel setup...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan migrate:fresh --seed

fix-permissions: ## Fix storage permissions for production server
	@echo "$(GREEN)Fixing storage permissions...$(NC)"
	@echo "$(YELLOW)Setting directory permissions to 775...$(NC)"
	sudo chmod -R 775 /var/www/storage
	sudo chmod -R 775 /var/www/bootstrap/cache
	@echo "$(YELLOW)Setting ownership to www-data...$(NC)"
	sudo chown -R www-data:www-data /var/www/storage
	sudo chown -R www-data:www-data /var/www/bootstrap/cache
	@echo "$(GREEN)Permissions fixed successfully!$(NC)"

fix-permissions-docker: ## Fix storage permissions inside Docker container
	@echo "$(GREEN)Fixing storage permissions in Docker...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app chown -R www-data:www-data /var/www/storage
	docker compose -f $(COMPOSE_FILE) exec app chown -R www-data:www-data /var/www/bootstrap/cache
	docker compose -f $(COMPOSE_FILE) exec app chmod -R 775 /var/www/storage
	docker compose -f $(COMPOSE_FILE) exec app chmod -R 775 /var/www/bootstrap/cache
	@echo "$(GREEN)Docker permissions fixed successfully!$(NC)"

clear-cache: ## Clear all Laravel caches
	@echo "$(GREEN)Clearing Laravel caches...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan cache:clear
	docker compose -f $(COMPOSE_FILE) exec app php artisan config:clear
	docker compose -f $(COMPOSE_FILE) exec app php artisan view:clear
	docker compose -f $(COMPOSE_FILE) exec app php artisan route:clear
	@echo "$(GREEN)All caches cleared!$(NC)"

optimize: ## Optimize Laravel for production
	@echo "$(GREEN)Optimizing Laravel for production...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan config:cache
	docker compose -f $(COMPOSE_FILE) exec app php artisan route:cache
	docker compose -f $(COMPOSE_FILE) exec app php artisan view:cache
	docker compose -f $(COMPOSE_FILE) exec app php artisan optimize
	@echo "$(GREEN)Laravel optimized for production!$(NC)"

deploy: ## Deploy to production (clear cache, fix permissions, optimize)
	@echo "$(GREEN)Starting production deployment...$(NC)"
	@make clear-cache
	@make fix-permissions-docker
	@make optimize
	@echo "$(GREEN)Deployment completed successfully!$(NC)"

deploy-server: ## Deploy on production server (non-Docker)
	@echo "$(GREEN)Starting server deployment...$(NC)"
	@echo "$(YELLOW)Clearing caches...$(NC)"
	cd /var/www && php artisan cache:clear
	cd /var/www && php artisan config:clear
	cd /var/www && php artisan view:clear
	cd /var/www && php artisan route:clear
	@echo "$(YELLOW)Fixing permissions...$(NC)"
	sudo chmod -R 775 /var/www/storage
	sudo chmod -R 775 /var/www/bootstrap/cache
	sudo chown -R www-data:www-data /var/www/storage
	sudo chown -R www-data:www-data /var/www/bootstrap/cache
	@echo "$(YELLOW)Optimizing for production...$(NC)"
	cd /var/www && php artisan config:cache
	cd /var/www && php artisan route:cache
	cd /var/www && php artisan view:cache
	cd /var/www && php artisan optimize
	@echo "$(GREEN)Server deployment completed!$(NC)"

storage-link: ## Create storage symbolic link
	@echo "$(GREEN)Creating storage link...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app php artisan storage:link
	@echo "$(GREEN)Storage link created!$(NC)"

npm-install: ## Install npm dependencies
	@echo "$(GREEN)Installing npm dependencies...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app npm install
	@echo "$(GREEN)NPM dependencies installed!$(NC)"

npm-build: ## Build frontend assets
	@echo "$(GREEN)Building frontend assets...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app npm run build
	@echo "$(GREEN)Frontend assets built!$(NC)"

npm-dev: ## Build frontend assets for development
	@echo "$(GREEN)Building frontend assets for development...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app npm run dev
	@echo "$(GREEN)Frontend development build completed!$(NC)"

npm-watch: ## Watch frontend assets for changes
	@echo "$(GREEN)Watching frontend assets...$(NC)"
	docker compose -f $(COMPOSE_FILE) exec app npm run watch