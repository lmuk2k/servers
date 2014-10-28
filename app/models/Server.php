<?php

class Server extends Eloquent {

    // SECURITY --------------------------------------------------------------
    protected $guarded = array('id');
    protected $fillable = array('name');
    
    // VALIDATION RULES  -----------------------------------------------------
    public static $rules = array(
        'name' => 'required'
    );

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each server has many websites
    public function websites() {
        return $this->hasMany('Website');
    }

}
