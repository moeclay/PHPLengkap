### Install package composer
```
$ composer require doctrine/dbal
```

### Buat file migrate & Ubah isi file
- buat file migrasi
```
# buat migrasi
$ php atisan make:migration change_tie_data --table=users
```

- ubah file migrasi & set default
```
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UbahTipeIsaccess extends Migration
{
    
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('is_access',25)->default('staff')->change();
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('is_access',20)->default('member')->change();
        });
    }
}
```
