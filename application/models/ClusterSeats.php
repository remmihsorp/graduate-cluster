<?php

class ClusterSeats extends Eloquent {

    public static $table = 'cluster_seats';
    public static $accessible = array('seat_title', 'available', 'cluster_id');

    public static $rules = array(
        'cluster' => 'required|integer',
        'title' => 'required|alpha_dash'
    );

    public static function validate($data){
        return Validator::make($data, ClusterSeats::$rules);
    }

}

?>