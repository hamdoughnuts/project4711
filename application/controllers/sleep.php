<?php
/* 
 * @author glo and dtran
 */
class Sleep extends Application {

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
        $source = $this->attractions->getByCategory('sleep');
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }
    
    function single($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->attractions->getByID($id);
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
}