<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{

    public function up(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $guestRole = Role::create(['name' => 'guest']);
        $user = User::find(1);
        $user->assignRole('admin');

    }


    public function down(): void
    {
        
    }
};
