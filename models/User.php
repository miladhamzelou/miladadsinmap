<?php

class User extends Illuminate\Database\Eloquent\Model {

    protected $table = "users";
    public $timestamps = false;

    public function scores() {
        return $this->hasMany('Score');
    }

}