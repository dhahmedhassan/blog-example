<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Elequent;

class Model extends Elequent
{
    // protected $fillable = ['title', 'body']; // these are only the fields that are okey to mass assign - white listed -
    protected $guarded = []; // these are the fields that you do not want to allow - blacklisted - // you can leave it empty and in this case you're not guarding anything.
}
