<?php
/* 
 * @author glo and dtran
 */
class Play extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders the page for the webapp for the "first" link in navbar.
     * Loads the 'justone' view with the first quote.
     */
    function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getByCategory('Play');
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('location' => $record['location'], 'image' => $record['image'], 'category' => $record['category']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }
}