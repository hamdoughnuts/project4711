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
        
        $recent = $this->attractions->getMostRecent();
        $this->data = array_merge($this->data, $recent);

        $this->render();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */