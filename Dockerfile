# 1. استخدم صورة PHP الرسمية
FROM php:8.2-cli

# 2. تثبيت الحزم المطلوبة للـ Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# 3. تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# 4. تعيين مجلد العمل داخل الحاوية
WORKDIR /app

# 5. نسخ الملفات من جهازك إلى الحاوية
COPY . .

# 6. تثبيت الحزم باستخدام Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# 7. إعداد Laravel
RUN php artisan config:cache

# 8. أمر التشغيل النهائي
CMD php artisan serve --host=0.0.0.0 --port=$PORT
