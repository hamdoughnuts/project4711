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
        $this->data['pagebody'] = 'homepage'; 
        
        $recent = $this->attractions->first();
        $this->data = array_merge($this->data, $recent);
        
        $source = $this->attractions->getByCategory('Play');
        $categories = array();
        foreach ($source as $record) {
            $categories[] = array('clocation' => $record['location'], 'cimage' => $record['image'], 'ccategory' => $record['category']);
        }
        $this->data['categories'] = $categories;
        
        $this->render();
        
        /*
        $source = $this->attractions->getByID(4);
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('location' => $record['location'], 'image' => $record['image'], 'category' => $record['category']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
         * 
         */
    }

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */