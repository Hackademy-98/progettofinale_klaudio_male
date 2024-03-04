<?php

use App\Models\Optional;
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
        Schema::create('optionals', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->timestamps();
        }); 
         
        $optionals = ["Benzina", "Diesel", "gpl" ,"3door", "5door", "grey" , "light", "dark"];
         foreach($optionals as $optional){
              Optional::create([ 
                 
                "name"=> $optional
              ]);
           
         
    } 
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('optionals');
    }
};
