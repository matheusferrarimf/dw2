FROM php:8.2-apache

# Habilita módulos necessários
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto para o diretório do Apache
COPY . /var/www/html/

# Instala as dependências do Composer
RUN composer install --no-dev --no-interaction --prefer-dist

# Define permissões
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80
EXPOSE 80

CMD ["apache2-foreground"]