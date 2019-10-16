-- Install Lumen & Persiapan
$ composer create-project --prefer-dist laravel/lumen blog


-- Install Lumen Tool
$ composer global require laravel/lumen-installer
$ export PATH="$PATH:/home/user/.config/composer/vendor/bin"
$ lumen new blog
