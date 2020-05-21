<?php namespace Responsive\SiteNotice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateResponsiveSitenoticeNotice extends Migration
{
    public function up()
    {
        Schema::create('responsive_sitenotice_notice', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('heading')->nullable();
            $table->text('message')->nullable();
            $table->string('button_label')->nullable();
            $table->string('button_link')->nullable();
            $table->string('delay')->nullable();
            $table->boolean('hide')->nullable();
            $table->string('width')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('responsive_sitenotice_notice');
    }
}
