FROM php:8.2-apache

# Installer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Activer mod_rewrite (si nécessaire pour des futurs projets)
RUN a2enmod rewrite

# Autoriser Apache à accéder au dossier monté
RUN echo '<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/allow-access.conf \
 && a2enconf allow-access
