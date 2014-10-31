<?php

/**
 * Our homepage. Shows the most recent attraction by date and 3 buttons for the 
 * eat, play and sleep categories.
 * 
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * Renders the homepage with the most recent attraction.
     */

    function index() {
        $this->data['pagebody'] = 'admin';    // this is the view we want shown
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getAll();
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array(
                      'id' => $record['id']
                    , 'image' => $record['image']
                    , 'category' => $record['category']
                    , 'name' => $record['name']
                    , 'image1' => $record['image']
                    , 'image2' => $record['image2']
                    , 'image3' => $record['image3']
                    , 'longtext' => $record['longtext']
                    , 'shorttext' => $record['shorttext']
                    , 'contact' => $record['contact']
                    , 'address' => $record['address']
                    , 'most_popular' => $record['most_popular']
                    , 'single_room_rate' => $record['single_room_rate']
                    , 'double_room_rate' => $record['double_room_rate']
                    , 'date' => $record['date']
                    );
        }
        $this->data['attractions'] = $attractions;
        
        $this->render();
    }
    function edit($id){
        $this->data['pagebody'] = 'edit';
        
        $this->render();
    }
    function delete($id){
        $this->render();
    }
}
