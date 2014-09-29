<?php

/**
 * Our homepage. Shows the most recent attraction by date and 3 buttons for the 
 * eat, play and sleep categories.
 * 
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders the homepage with the most recent attraction.
     */
    
    function index() {
        $this->data['pagebody'] = 'homepage'; 
        
        $recent = $this->attractions->getMostRecent();
        $this->data = array_merge($this->data, $recent);

        $this->render();
    }
}