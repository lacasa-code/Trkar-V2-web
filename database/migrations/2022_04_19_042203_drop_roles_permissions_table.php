<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropRolesPermissionsTable extends Migration
{
    
    public function up()
    {
        Schema::dropIfExists('role_users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permission_roles');
        Schema::dropIfExists('permissions');
    }

    public function down()
    {
        //
    }
}
