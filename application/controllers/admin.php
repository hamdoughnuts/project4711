<?php

/**
 * Our homepage. Shows the most recent attraction by date and 3 buttons for the 
 * eat, play and sleep categories.
 * 
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders the homepage with the most recent attraction.
     */

    function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getAll();
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category'], 'name' => $record['name']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }

}
