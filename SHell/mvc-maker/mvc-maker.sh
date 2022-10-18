#!/bin/sh

path=$1
projectName=$2

if [ -z "$path" ];
then
        path=$(pwd)
fi

if [ -z "$projectName" ];
then
        projectName=MVC
fi

app=$path/$projectName/app
public=$path/$projectName/public
models=$path/$projectName/app/models
views=$path/$projectName/app/views
controllers=$path/$projectName/app/controllers
core=$path/$projectName/app/core

mkdir -p $path/$projectName/app/models $path/$projectName/app/views $path/$projectName/app/controllers $path/$projectName/app/core
mkdir -p $path/$projectName/app/views/home $path/$projectName/app/views/templates
mkdir -p $path/$projectName/public/js $path/$projectName/public/css

touch $public/css/style.css
touch $public/js/script.js

printf Options\ -Indexes > $app/.htaccess
printf Options\ -MultiViews'\n''\n'RewriteEngine\ On'\n''\n'RewriteBase\ /$projectName/public/'\n''\n'RewriteCond\ %%{REQUEST_FILENAME}\ \!-d'\n'RewriteCond\ %%{REQUEST_FILENAME}\ \!-f'\n''\n'RewriteRule\ ^\(.+\)\$\ index.php/?url=\$1\ [QSA,L] > $public/.htaccess
printf \<?php'\n''\n'require_once\ \'core/Controller.php\'\;'\n'require_once\ \'core/App.php\'\; > $app/init.php
printf \<h6\>welcome\ to\</h6\>'\n'\<h1\>PHP\ MVC\</h1\> > $views/home/index.php
printf \<\!DOCTYPE\ html\>'\n'\<html\ lang=\"en\"\>'\n'\<head\>'\n'\ \ \ \ \<meta\ charset=\"UTF-8\"\>'\n'\ \ \ \ \<meta\ http-equiv=\"X-UA-Compatible\"\ content=\"IE=edge\"\>'\n'\ \ \ \ \<meta\ name=\"viewport\"\ content=\"width=device-width\,\ initial-scale=1.0\"\>'\n'\ \ \ \ \<title\>\<?=\$data[\'judul\']?\>\</title\>'\n'\ \ \ \ \<link\ rel=\"stylesheet\"\ href=\"http://localhost/$projectName/public/css/style.css\"\>'\n'\</head\>'\n'\<body\> > $views/templates/header.php
printf \</body\>'\n'\<script\ src=\'https://code.jquery.com/jquery-3.6.1.min.js\'\>\</script\>'\n'\<script\ src=\'http://localhost/$projectName/public/js/script.js\'\>\</script\>'\n'\</html\> > $views/templates/footer.php
printf \<?php'\n''\n'class\ Home\ extends\ Controller\ {'\n'\ \ \ \ public\ function\ index\(\){'\n'\ \ \ \ \ \ \ \ \$data[\'judul\']\ =\ \'Utama\'\;'\n'\ \ \ \ \ \ \ \ \$this-\>view\(\'templates/header\'\,\ \$data\)\;'\n'\ \ \ \ \ \ \ \ \$this-\>view\(\'home/index\'\)\;'\n'\ \ \ \ \ \ \ \ \$this-\>view\(\'templates/footer\'\)\;'\n'\ \ \ \ }'\n'}'\n' > $controllers/home.php
printf \<?php'\n''\n'class\ App'\n'{'\n'\ \ \ \ protected\ \$controller\ =\ \"home\"\;'\n'\ \ \ \ protected\ \$method\ =\ \"index\"\;'\n'\ \ \ \ protected\ \$params\ =\ []\;'\n'\ \ \ \ public\ function\ __construct\(\)'\n'\ \ \ \ {'\n'\ \ \ \ \ \ \ \ \$url\ =\ \$this-\>parseUrl\(\)\;'\n'\ \ \ \ \ \ \ \ if\ \(file_exists\(\'../app/controllers/\'\ .\ \$url[0]\ .\ \'.php\'\)\)\ {'\n'\ \ \ \ \ \ \ \ \ \ \ \ \$this-\>controller\ =\ \$url[0]\;'\n'\ \ \ \ \ \ \ \ \ \ \ \ unset\(\$url[0]\)\;'\n'\ \ \ \ \ \ \ \ }'\n'\ \ \ \ \ \ \ \ require_once\ \'../app/controllers/\'\ .\ \$this-\>controller\ .\ \'.php\'\;'\n''\n'\ \ \ \ \ \ \ \ \$this-\>controller\ =\ new\ \$this-\>controller\;'\n''\n'\ \ \ \ \ \ \ \ if\ \(isset\(\$url[1]\)\)\ {'\n'\ \ \ \ \ \ \ \ \ \ \ \ if\ \(method_exists\(\$this-\>controller\,\ \$url[1]\)\)\ {'\n'\ \ \ \ \ \ \ \ \ \ \ \ \ \ \ \ \$this-\>method\ =\ \$url[1]\;'\n'\ \ \ \ \ \ \ \ \ \ \ \ \ \ \ \ unset\(\$url[1]\)\;'\n'\ \ \ \ \ \ \ \ \ \ \ \ }'\n'\ \ \ \ \ \ \ \ }'\n'\ \ \ \ \ \ \ \ \$this-\>params\ =\ \$url\ ?\ array_values\(\$url\)\ :\ []\;'\n'\ \ \ \ \ \ \ \ call_user_func_array\([\$this-\>controller\,\ \$this-\>method]\,\ \$this-\>params\)\;'\n'\ \ \ \ }'\n'\ \ \ \ public\ function\ parseUrl\(\)'\n'\ \ \ \ {'\n'\ \ \ \ \ \ \ \ if\ \(isset\(\$_GET[\'url\']\)\)\ {'\n'\ \ \ \ \ \ \ \ \ \ \ \ return\ \$url\ =\ explode\(\'/\'\,\ filter_var\(rtrim\(\$_GET[\'url\']\,\ \'/\'\)\,\ FILTER_SANITIZE_URL\)\)\;'\n'\ \ \ \ \ \ \ \ }\ return\ [\$this-\>controller\,\ \$this-\>method]\;'\n'\ \ \ \ }'\n'}'\n' > $core/App.php
printf \<?php'\n''\n'class\ Controller'\n'\{'\n'\ \ \ \ public\ function\ view\(\$view,\ \$data\ =\ []\)'\n'\ \ \ \ \{'\n'\ \ \ \ \ \ \ \ require_once\ \'../app/views/\'\ .\ \$view\ .\ \'.php\'\;'\n'\ \ \ \ }'\n''\n'\ \ \ \ public\ function\ model\(\$model\)\{'\n'\ \ \ \ \ \ \ \ require_once\ \'../app/models/\'.\ \$model.\'.php\'\;'\n'\ \ \ \ \ \ \ \ return\ new\ \$model\;'\n'\ \ \ \ }'\n'} > $core/Controller.php
printf \<?php'\n''\n'require_once\ \'../app/init.php\'\;'\n''\n'new\ App\; > $public/index.php
