FROM php:8.2-apache

# Instala extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copia arquivos da aplicação
COPY index.php /var/www/html/
COPY api/usuarios.php /var/www/html/api/

EXPOSE 80
