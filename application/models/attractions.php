<?php

/**
 * This is a model for attractions, but with temporary data
 *
 * @author glo and dtran
 */
class Attractions extends CI_Model {
        
    var $data = array(
        array(
            'id' => '1', 
            'location' => 'Bob Monkhouse',
            'image' => 'bob-monkhouse-150x150.jpg', 
            'where'=>'/sleep',
            'longtext' => 'When I die, I want to go peacefully like my grandfather did–in his sleep. Not yelling and screaming like the passengers in his car.',
            'shortext' => 'When I die.'
            ),
        array(
            'id' => '2', 
            'location' => 'Elayne Boosler', 
            'image' => 'elayne-boosler-150x150.jpg', 
            'where'=>'/lock/em/up',
            'longtext' => 'asffs s df sf sdf saf sdf sdf sadf sadf sdf a',
            'shortext' => 'afsdfd'
            )
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single quote
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

    // retrieve the first quote
    public function first() {
        return $this->data[0];
    }

    // retrieve the last quote
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
