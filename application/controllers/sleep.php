<?php

/*
 * Controller for the sleep category.
 * 
 * @author glo and dtran
 */

class Sleep extends Application {

    function __construct() {
        parent::__construct();
        $this->checkForAdmin();
    }

    /*
     * For assignment 1. Renders a page for a single attraction in sleep category.
     */

    function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        // build the list of attractions, to pass on to our view
        $source = $this->attractionsdb->all_for_cat('sleep');
        $attractions = array();
        foreach ($source as $record) {
            $attractions[] = array(
                'id' => $record['id'], 
                'image' => $record['image1'], 
                'category' => $record['category'], 
                'name' => $record['name']);
        }
        $this->data['attractions'] = $attractions;

        
        $this->render();
    }

    /*
     * Renders the page for all attractions in the sleep category.
     * Disabled for assignment 1.
     */
    /* function index() {
      $this->data['pagebody'] = 'category';    // this is the view we want shown

      // build the list of attractions, to pass on to our view
      $source = $this->attractions->getByCategory('sleep');
      $attractions = array();
      foreach ($source as $record) {
      $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category'], 'name' => $record['name']);
      }
      $this->data['attractions'] = $attractions;

      $this->render();
      } */

    /*
     * Renders a single attraction in the sleep category.
     */

    function single($id) {
        $this->data['pagebody'] = 'sleep';    // this is the view we want shown

        $record = $this->attractionsdb->retrieve_one($id);
        //$this->data = array_merge($this->data, $record);
        $this->data['image'] = $record['image1'];
        $this->data['image2'] = $record['image2'];
        $this->data['image3'] = $record['image3'];
        $this->data['name'] = $record['name'];
        $this->data['contact'] = $record['contact'];
        $this->data['address'] = $record['address'];
        $this->data['longtext'] = $record['longtext'];
        $this->data['shorttext'] = $record['shorttext'];
        $this->data['shorttext'] = $record['shorttext'];
        $this->data['single_room_rate'] = $record['single_room_rate'];
        $this->data['double_room_rate'] = $record['double_room_rate'];
        $this->render();
    }

}
