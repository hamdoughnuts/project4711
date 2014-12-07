<?php

/**
 * Our about page. Just some information about our work on the site so far.
 * 
 */
class About extends Application {

    function __construct() {
        parent::__construct();
        $this->checkForAdmin();
    }

    /*
     * Renders about page.
     */

    function index() {
        $this->data['pagebody'] = 'about';

        $this->render();
    }

}
