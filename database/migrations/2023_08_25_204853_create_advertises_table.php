<?php

use App\Models\Category;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->decimal('price', 10, 2);
            $table->boolean('negotiable')->default(false);
            $table->text('description');
            $table->string('contact');
            $table->integer('views');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(State::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertises');
    }
};
