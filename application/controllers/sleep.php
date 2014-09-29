<?php
/* 
 * Controller for the sleep category.
 * 
 * @author glo and dtran
 */
class Sleep extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * For assignment 1. Renders a page for a single attraction in sleep category.
     */
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->attractions->getByID(06);
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
    
    /*
     * Renders the page for all attractions in the sleep category.
     * Disabled for assignment 1.
     */
    /*function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getByCategory('sleep');
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category'], 'name' => $record['name']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }*/
    
    /*
     * Renders a single attraction in the sleep category.
     */
    function single($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->attractions->getByID($id);
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
}