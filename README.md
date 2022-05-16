
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


