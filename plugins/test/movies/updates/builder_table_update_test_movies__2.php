<?php namespace Test\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTestMovies2 extends Migration
{
    public function up()
    {
        Schema::table('test_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('test_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
