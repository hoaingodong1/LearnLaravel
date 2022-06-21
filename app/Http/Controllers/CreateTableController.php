<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;



class CreateTableController extends Controller
{
    public function CreateTable(){
        Schema::create('categories',function(Blueprint $table){
            $table ->increments('id');
            $table ->string('name',100);
            $table ->string('image',100);
            $table ->string('description',100);
            $table ->timestamps();
        });
        echo('successfully');

        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('image',100);
            $table->string('description',100);
            $table->timestamps();
        });
        echo('successfully');


    }
}
