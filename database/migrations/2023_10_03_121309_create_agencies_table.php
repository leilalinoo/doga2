<?php

use App\Models\Agency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name', 20);
            $table->string('country', 15);
            $table->string('type', 20);
            $table->timestamps();
        });
        Agency::create([
            'name' => 'repulooo',
            'country' => 'hun',
            'type' => 'dvbskjdbvkjds',
        ]);
        Agency::create([
            'name' => 'gsgdsvyawf',
            'country' => 'de',
            'type' => 'ahhhhha',
        ]);
        Agency::create([
            'name' => 'neeeeeeeeem',
            'country' => 'uk',
            'type' => '333',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
