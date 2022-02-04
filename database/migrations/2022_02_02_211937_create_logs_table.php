<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * @var string Table name
     */
    private string $table_name = 'logs';

    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('correlation_id');
            $table->integer('type');
            $table->string('object_id')->nullable();
            $table->string('class')->nullable();
            $table->longText('payload')->nullable();
            $table->timestamp('timestamp', 6);
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table_name);
    }
}
