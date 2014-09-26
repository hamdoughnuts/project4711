<?php

/**
 * This is a model for attractions, but with temporary data
 *
 * @author glo and dtran
 */
class Attractions extends CI_Model {
        
    var $data = array(
        array(
            'id' => '01', 
            'location' => 'ICS',
            'category' => 'Eat',
            'image' => 'helpme.gif', 
            'longtext' => 'First elementary school.',
            'shortext' => 'Number one',
            'contact' => '7150929',
            'date' => '12/22/94'
            ),
        array(
            'id' => '02', 
            'location' => 'Brighouse',
            'category' => 'Eat',
            'image' => 'bleh.jpg', 
            'longtext' => 'Secondary elementary school.',
            'shortext' => 'Number two.',
            'contact' => '7150929',
            'date' => '12/22/97'
            ),
        array(
            'id' => '03', 
            'location' => 'Blair',
            'category' => 'Eat',
            'image' => 'sad.jpg', 
            'longtext' => 'Third elementary school.',
            'shortext' => 'Number three.',
            'contact' => '7150929',
            'date' => '12/22/02'
            ),
        array(
            'id' => '04', 
            'location' => 'UBC', 
            'category' => 'Play',
            'image' => '200.gif', 
            'longtext' => 'asffs s df sf sdf saf sdf sdf sadf sadf sdf a',
            'shortext' => 'afsdfd',
            'contact' => '7150929',
            'date' => '12/22/78'
            ),
        array(
            'id' => '04', 
            'location' => 'SFU', 
            'category' => 'Play',
            'image' => 'you.jpg', 
            'longtext' => 'asffs s df sf sdf saf sdf sdf sadf sadf sdf a',
            'shortext' => 'afsdfd',
            'contact' => '7150929',
            'date' => '12/22/78'
            ),
        array(
            'id' => '04', 
            'location' => 'BCIT', 
            'category' => 'Play',
            'image' => 'yup.png', 
            'longtext' => 'asffs s df sf sdf saf sdf sdf sadf sadf sdf a',
            'shortext' => 'afsdfd',
            'contact' => '7150929',
            'date' => '12/22/78'
            ),
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single attraction
    public function getByID($id) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $id)
                return $record;
        return null;
    }
    
    public function getByCategory($category) {
        $records = array();
        foreach ($this->data as $record)
            if ($record['category'] == $category)
                $records[] = $record;
        return $records;
    }
    
    // retrieve all of the attractions
    public function getAll() {
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
