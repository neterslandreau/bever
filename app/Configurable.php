<?php namespace App;

class Configurable extends Model
{
    protected $table = 'configurables';

    protected $fillable = ['name', 'slug', 'value'];
}
