# php_blog_app
This is a simple blog application implemented in native php


To execute this project first run the following command in the root directory:

<b> $ composer install </b>

Then, change the database variables in app/config/config.php:

<b>
<p>// DB Params</p>
<p>define('DB_HOST', 'localhost');</p>
<p>define('DB_USER', 'root');</p>
<p>define('DB_PASS', 'root');</p>
<p>define('DB_NAME', 'blog');</p>
</b>

Also, change the database variables in phinx.php:

<b>
<p>'development' => [ </p>
    <p> 'adapter' => 'mysql',</p>
    <p> 'host' => 'localhost',</p>
    <p> 'name' => 'blog',</p>
    <p> 'user' => 'root',</p>
    <p> 'pass' => 'root',</p>
    <p> 'port' => '3306',</p>
    <p> 'charset' => 'utf8',</p>
<p>],
</b>

Then, run the database migrations:

<b> $ ./vendor/bin/phinx migrate </b>

Finally in the public directory run:

<b> $ php -S localhost:8000 </b>


