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
	@echo "$(GREEN)Forward ESL Docker Management Commands$(NC)"
	@echo ""
	@echo "$(YELLOW)Basic Commands:$(NC)"
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  $(GREEN)%-15s$(NC) %s\n", $$1, $$2}' $(MAKEFILE_LIST)

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