<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Filter extends Application {

    function __construct() {
        parent::__construct();
        $this->checkForAdmin();
//        $this->restrict(USER,ADMIN);
    }

    function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'filter_page';

        // build the list of attractions, to pass on to our view
        $source = $this->attractionsdb->retrieve_all();
        $attractions = array();

        foreach ($source as $record) {
            $attractions[] = array(
                'name' => $record['name']
                , 'category' => $record['category']
                , 'price_range' => $record['price_range']
                , 'target_audience' => $record['target_audience']
            );
        }
        $this->data['attractions'] = $attractions;
        $this->render();
    }

    /**
     * Retrieves the prices then orders them from high to low and displays it 
     * in the view
     */
    function price_high_low() {
        $this->data['pagebody'] = 'filter_page';

        $source = $this->attractionsdb->all_price_desc();

        foreach ($source as $record) {
            $attractions[] = array(
                'name' => $record->name
                , 'category' => $record->category
                , 'price_range' => $record->price_range
                , 'target_audience' => $record->target_audience
            );
        }

        $this->data['attractions'] = $attractions;
        $this->render();
    }

    /**
     * Retrieves the prices then orders them from low to high and displays it 
     * in the view
     */
    function price_low_high() {
        $this->data['pagebody'] = 'filter_page';
        $source = $this->attractionsdb->all_price_asc();


        foreach ($source as $record) {
            $attractions[] = array(
                'name' => $record->name
                , 'category' => $record->category
                , 'price_range' => $record->price_range
                , 'target_audience' => $record->target_audience
            );
        }

        $this->data['attractions'] = $attractions;
        $this->render();
    }

    /**
     * Retrieves all of the target audience and orders them by adults first
     */
    function audience_adults() {
        $this->data['pagebody'] = 'filter_page';


        $source = $this->attractionsdb->all_audience_desc();


        foreach ($source as $record) {
            $attractions[] = array(
                'name' => $record->name
                , 'category' => $record->category
                , 'price_range' => $record->price_range
                , 'target_audience' => $record->target_audience
            );
        }
        $this->data['attractions'] = $attractions;
        $this->render();
    }

    function audience_family() {
        $this->data['pagebody'] = 'filter_page';


        $source = $this->attractionsdb->all_audience_asc();



        foreach ($source as $record) {
            $attractions[] = array(
                'name' => $record->name
                , 'category' => $record->category
                , 'price_range' => $record->price_range
                , 'target_audience' => $record->target_audience
            );
        }
        $this->data['attractions'] = $attractions;
        $this->render();
    }

// renders an edit page for a single attraction
    function edit($id) {
        $this->load->library('session');

        // using "item" as the session key
        // assuming no item record in-progress
        $item_record = null;

        // check if we have an item in the session already
        $session_record = $this->session->userdata('item');
        if ($session_record !== FALSE) {
            // does if id matches the requested one
            if (isset($session_record->id) && ($session_record->id == $id)) {
                // if it matches use the item record from the session
                $item_record = $session_record;
            }
        }

        // if there is no item in the session
        if ($item_record == null) {
            // get the item record from the items model if it exists
            if ($this->attractionsdb->exists($id)) {
                $item_record = $this->attractionsdb->retrieve_one($id);
//                var_dump($item_record);
            }
            // else create an item record with the id
            else {
                $item_record = $this->attractionsdb->create();
                /**
                 * Working on this line because you are trying to create a new attraction
                 */
                // create was making an object, need to convert to array
                $item_record = get_object_vars($item_record);
                $item_record['id'] = $id;
                $item_record['contact'] = null;
                $item_record['address'] = null;
                $item_record['longtext'] = null;
                $item_record['date'] = null;
                $item_record['shorttext'] = null;
                $item_record['image1'] = null;
                $item_record['image2'] = null;
                $item_record['image3'] = null;
                $item_record['most_popular_dish'] = null;
                $item_record['single_room_rate'] = null;
                $item_record['double_room_rate'] = null;
                $item_record['entrance_fee'] = null;
//                var_dump($item_record);
            }
            // save it as the “item” session object
            $this->session->set_userdata('item', $item_record);
        }

        // set the view parameters with the current item record
        $this->data['id'] = $item_record['id'];
        $this->data['category'] = $item_record['category'];
        $this->data['name'] = $item_record['name'];

        if ($item_record['image1'] === "")
            $this->data['image'] = "default.jpg";
        else
            $this->data['image'] = $item_record['image1'];

        if ($item_record['image2'] === "")
            $this->data['image2'] = "default.jpg";
        else
            $this->data['image2'] = $item_record['image2'];

        if ($item_record['image3'] === "")
            $this->data['image3'] = "default.jpg";
        else
            $this->data['image3'] = $item_record['image3'];

        $this->data['contact'] = $item_record['contact'];
        $this->data['address'] = $item_record['address'];
        $this->data['longtext'] = $item_record['longtext'];
        $this->data['shorttext'] = $item_record['shorttext'];
        $this->data['most_popular'] = $item_record['most_popular_dish'];
        $this->data['single_room_rate'] = $item_record['single_room_rate'];
        $this->data['double_room_rate'] = $item_record['double_room_rate'];
        $this->data['entrance_fee'] = $item_record['entrance_fee'];

        // check which category view to use
        if ($this->data['category'] == 'eat') {
            $this->data['pagebody'] = 'edit_eat';
        } elseif ($this->data['category'] == 'play') {
            $this->data['pagebody'] = 'edit_play';
        } elseif ($this->data['category'] == 'sleep') {
            $this->data['pagebody'] = 'edit_sleep';
        } else {
            $this->data['pagebody'] = 'edit';
        }
        $this->render();
    }

}
