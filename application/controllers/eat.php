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
            $attractions[] = array(
                'id' => $record->id, 
                'image' => $record->image1, 
                'category' => $record->category, 
                'name' => $record->name);
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }

    /*
     * Renders a single attraction in the eat category.
     */

    function single($id) {
        $this->data['pagebody'] = 'eat';    // this is the view we want shown

        $record = $this->attractions->getByID($id);
        //$this->data = array_merge($this->data, $record);
        $this->data['image'] = $record->image1;
        $this->data['image2'] = $record->image2;
        $this->data['image3'] = $record->image3;
        $this->data['name'] = $record->name;
        $this->data['contact'] = $record->contact;
        $this->data['address'] = $record->address;
        $this->data['longtext'] = $record->longtext;
        $this->data['shorttext'] = $record->shorttext;
        $this->data['most_popular'] = $record->most_popular_dish;
        
        $this->render();
    }

}
