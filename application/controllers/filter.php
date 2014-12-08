<?php

class Filter extends Application {

    function __construct() {
        parent::__construct();
        $this->checkForAdmin();
    }
    
    function index() {
        $this->data['pagebody'] = 'filter_page';
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->get_all_attractions();
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array(
                'id' => $record['id']
                ,'name' => $record['name']
                , 'category' => $record['category']
            );
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }
    
    function filter_by_price($price) {
        $this->data['pagebody'] = 'filter_page';
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->attractions_by_price($price);
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array(
                'id' => $record['id']
                ,'name' => $record['name']
                , 'category' => $record['category']
            );
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }
    
    function filter_by_group($group) {
        $this->data['pagebody'] = 'filter_page';
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->attractions_by_target($group);
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array(
                'id' => $record['id']
                ,'name' => $record['name']
                , 'category' => $record['category']
            );
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }

}
