<?php

class Website extends Eloquent {

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('name', 'full_name', 'url', 'production', 'description', 'notes', 'server_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function server() {
        return $this->belongsTo('Server');
    }

}
