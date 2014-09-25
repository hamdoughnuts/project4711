<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->all();
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('location' => $record['location'], 'image' => $record['image'], 'href' => $record['where']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */