<?php

class Website extends Eloquent {

    // SECURITY --------------------------------------------------------------
    protected $guarded = array('id');
    protected $fillable = array('name', 'full_name', 'url', 'production', 'description', 'notes', 'server_id');

    // VALIDATION RULES  -----------------------------------------------------
    public static $rules = array(
        'name' => 'required',
        'url' => 'required'
    );

    // RELATIONSHIPS ---------------------------------------------------------
    public function server() {
        return $this->belongsTo('Server');
    }

}
