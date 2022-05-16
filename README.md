
    php artisan make:model People -mf
    php artisan make:model Comment -mf
    php artisan make:model Article -crmf

эта команда создает model, resource controller ( cr ), migration ( m) и factory ( f) за один раз
  
чтобы небыло коллизий, прежде всего возможно вручную удалить, например

    rm -rf example-app/app/Models/Article.php
    rm -rf example-app/app/Http/Controllers/ArticleController.php
    rm -rf example-app/database/factories/ArticleFactory.php

если уж таковое произошло, тогда как-то вариативно, без миграции

    php artisan make:model Article -crf

..

Давайте заполним их некоторыми данными, чтобы мы могли начать работать с материалом. 

..

На всякий случай не мешало бы запустить mysql сервер..

    mysqld.exe --defaults-file="MySQL-5.7\my.ini" --user=root --standalone --console

    CREATE DATABASE laravel_example_app
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

.. а потом уточняем какие миграции выполнены
    
    php artisan migrate:status

.. и при необходимости , в этом случае, в этом проекте, откатываемся, если они выполнены 

    php artisan migrate:rollback

а может, дополнительные телодвижения вроде

    mysql --user="root" --password="" -e "use laravel_example_app;drop table if exists comments;"

и добавляем [свои модели](./database/migrations) данных в каталог:

    ls example-app/database/migrations

в моем случае пришлось соблюсти последовательность выполнения

    php artisan migrate --path=database/migrations/2022_05_16_091858_create_people_table.php
    php artisan migrate --path=database/migrations/2022_05_16_092442_create_articles_table.php
    php artisan migrate --path=database/migrations/2022_05_16_091915_create_comments_table.php

