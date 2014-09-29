<?php
/* 
 * Controller for the eat category.
 * 
 * @author glo and dtran
 */
class Eat extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders the page for all attractions in the Eat category.
     */
    function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getByCategory('eat');
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category'], 'name' => $record['name']);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }
    
    /*
     * Renders a single attraction in the eat category.
     */
    function single($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->attractions->getByID($id);
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
}