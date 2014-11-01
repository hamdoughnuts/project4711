<?php

/*
 * Controller for the play category.
 * 
 * @author glo and dtran
 */

class Play extends Application {

    function __construct() {
        parent::__construct();
    }

    /*
     * For assignment 1. Renders a page for a single attraction in play category.
     */

    function index() {
        $this->data['pagebody'] = 'category';    // this is the view we want shown
        // build the list of attractions, to pass on to our view
        $source = $this->attractions->getByCategory('play');
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
     * Renders the page for all attractions in the play category.
     * Disabled for assignment 1.
     */
    /* function index() {
      $this->data['pagebody'] = 'category';    // this is the view we want shown

      // build the list of attractions, to pass on to our view
      $source = $this->attractions->getByCategory('play');
      $attractions = array();
      foreach ($source as $record) {
      $attractions[] = array('id' => $record['id'], 'image' => $record['image'], 'category' => $record['category'], 'name' => $record['name']);
      }
      $this->data['attractions'] = $attractions;

      $this->render();
      } */

    /*
     * Renders a single attraction in the play category.
     */

    function single($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

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
        $this->render();
    }

}
