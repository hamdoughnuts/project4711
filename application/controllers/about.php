<?php

/**
 * Our about page. Just some information about our work on the site so far.
 * 
 */
class About extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders about page.
     */

    function index() {
        $this->data['pagebody'] = 'about';
        $this->render();
    }

}
