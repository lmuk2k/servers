<?php

class Server extends Eloquent {

    // MASS ASSIGNMENT -------------------------------------------------------
    protected $fillable = array('name');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each server has many websites
    public function websites() {
        return $this->hasMany('Website');
    }

}
