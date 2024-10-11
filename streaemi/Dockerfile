# Utilise l'image officielle de PHP avec Apache
FROM php:8.2-cli

# Installer les dépendances nécessaires pour Symfony
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libicu-dev \
    libzip-dev \
    libonig-dev \
    && docker-php-ext-install \
    intl \
    mbstring \
    pdo_mysql \
    zip \
    opcache

RUN apt-get update && apt-get install -y apache2 \
    && a2enmod rewrite \
    && service apache2 restart



# Installer Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Copier le projet Symfony dans le conteneur
WORKDIR /var/www/html/
COPY . .

# Lancer Composer pour installer les dépendances PHP
RUN composer install --prefer-dist --no-interaction --optimize-autoloader

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
