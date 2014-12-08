<?php

/**
 * This is our attractions database model that is bound to current
 * attraction database table.
 *
 * @author Danny Tran & Germaine Lo
 */
class Attractions extends MY_Model {

    var $data = array();

    /*
     * Constructor
     */

    public function __construct() {
        parent::__construct('attractions', 'id');
    }

    /*
     * Retrieves a single attraction by ID
     */

    function get_by_id($id) {
        // get the record from db
        $record = (array) $this->get($id);

        // get the xml from description column
        $recordXML = simplexml_load_string($record['xml_desc']);

        // get all images for attraction
        $images = array();
        foreach ($recordXML->images->image as $image) {
            $images[] = array('image' => $image);
        }

        // return array that represents single attraction
        return array('id' => $record['id'],
            'category' => $record['category'],
            'name' => $record['name'],
            'contact' => (string) $recordXML->contact,
            'address' => (string) $recordXML->address,
            'longtext' => (string) $recordXML->longtext,
            'date' => (string) $recordXML->date,
            'shorttext' => (string) $recordXML->shorttext,
            'image1' => (string) $recordXML->images->image[0],
            'image2' => (string) $recordXML->images->image[1],
            'image3' => (string) $recordXML->images->image[2],
            'price_range' => $record['price_range'],
            'target_audience' => $record['target_audience'],
            'most_popular_dish' => (string) $recordXML->most_popular_dish,
            'single_room_rate' => (string) $recordXML->single_room_rate,
            'double_room_rate' => (string) $recordXML->double_room_rate,
            'entrance_fee' => (string) $recordXML->entrance_fee
        );
    }

//    public function getByID($id) {
//        $temp = $this->attractions->get($id);
//        return $temp;
//    }

    /*
     * Retrieves all attractions
     */

    function get_all_attractions() {
        // for each attraction in attractions table
        foreach ($this->all() as $record) {
            $record = (array) $record;

            // get the xml from description column
            $recordXML = simplexml_load_string($record['xml_desc']);

            // get all images for attraction
            $images = array();
            foreach ($recordXML->images->image as $image) {
                $images[] = array('image' => $image);
            }

            // insert record into array of records
            $records[] = array('id' => $record['id'],
                'category' => $record['category'],
                'name' => $record['name'],
                'contact' => (string) $recordXML->contact,
                'address' => (string) $recordXML->address,
                'longtext' => (string) $recordXML->longtext,
                'date' => (string) $recordXML->date,
                'shorttext' => (string) $recordXML->shorttext,
                'image1' => (string) $recordXML->images->image[0],
                'image2' => (string) $recordXML->images->image[1],
                'image3' => (string) $recordXML->images->image[2],
                'price_range' => $record['price_range'],
                'target_audience' => $record['target_audience'],
                'most_popular_dish' => (string) $recordXML->most_popular_dish,
                'single_room_rate' => (string) $recordXML->single_room_rate,
                'double_room_rate' => (string) $recordXML->double_room_rate,
                'entrance_fee' => (string) $recordXML->entrance_fee);
        }

        return $records;
    }

//    public function getAll() {
//        return $this->attractions->all();
//    }

    /*
     * Retrieves all attractions in a category
     */

    public function attractions_by_category($category) {
        $records = array();
        $count = 0;
        // iterate over the data until we find records that match the category
        foreach ($this->all() as $record) {
            $record = (array) $record;

            // if category matches
            if ($record['category'] == $category) {
                $recordXML = simplexml_load_string($record['xml_desc']);
                $records[] = array('id' => $record['id'],
                    'category' => $record['category'],
                    'name' => $record['name'],
                    'contact' => (string) $recordXML->contact,
                    'address' => (string) $recordXML->address,
                    'longtext' => (string) $recordXML->longtext,
                    'date' => (string) $recordXML->date,
                    'shorttext' => (string) $recordXML->shorttext,
                    'image1' => (string) $recordXML->images->image[0],
                    'image2' => (string) $recordXML->images->image[1],
                    'image3' => (string) $recordXML->images->image[2],
                    'price_range' => $record['price_range'],
                    'target_audience' => $record['target_audience']);
                $count++;
            }
        }
        if ($count > 0) {
            return $records;
        }
        return null;
    }

//    public function getByCategory($category) {
//        $records = $this->attractions->some('category', $category);
//        return $records;
//    }

    /*
     * Retrieves the most recent attraction by date value
     */

    public function get_most_recent() {
        $allrecs = (array) $this->all();
        $recent = (array) $allrecs[0];
        
        //iterate over the data until we find the most recently published article
        foreach ($allrecs as $record) {
            $record = (array) $record;
            $recentXML = simplexml_load_string($recent['xml_desc']);
            $recordXML = simplexml_load_string($record['xml_desc']);
            
            if (date($recordXML->date) > date($recentXML->date)) {
                $recent = $record;
            }
        }
        
        $recentXML = simplexml_load_string($recent['xml_desc']);
        return array('id' => $recent['id'],
            'category' => $recent['category'],
            'name' => $recent['name'],
            'contact' => (string) $recentXML->contact,
            'address' => (string) $recentXML->address,
            'longtext' => (string) $recentXML->longtext,
            'date' => (string) $recentXML->date,
            'shorttext' => (string) $recentXML->shorttext,
            'image1' => (string) $recentXML->images->image[0],
            'image2' => (string) $recentXML->images->image[1],
            'image3' => (string) $recentXML->images->image[2],
            'price_range' => $recent['price_range'],
            'target_audience' => $recent['target_audience']);
    }

//    public function getMostRecent() {
//        $records = $this->attractions->all();
//
//        $temp = $this->attractions->get(1);
//        // iterate over the data and return most recent
//        foreach ($records as $record)
//            if ($record->date > $temp->date)
//                $temp = $record;
//        return $temp;
//    }

    // retrieve all attractions for a certain price
    public function attractions_by_price($price) {
        $records = array();
        $count = 0;
        // iterate over the data until we find records that match the price
        foreach ($this->all() as $record) {
            $record = (array) $record;
            
            // if record has the same price range we are looking for
            if ($record['price_range'] == $price) {
                $recordXML = simplexml_load_string($record['xml_desc']);
                $records[] = array('id' => $record['id'],
                    'category' => $record['category'],
                    'name' => $record['name'],
                    'contact' => (string) $recordXML->contact,
                    'address' => (string) $recordXML->address,
                    'longtext' => (string) $recordXML->longtext,
                    'date' => (string) $recordXML->date,
                    'shorttext' => (string) $recordXML->shorttext,
                    'image1' => (string) $recordXML->images->image[0],
                    'image2' => (string) $recordXML->images->image[1],
                    'image3' => (string) $recordXML->images->image[2],
                    'price_range' => $record['price_range'],
                    'target_audience' => $record['target_audience']);
                $count++;
            }
        }
        if ($count > 0) {
            return $records;
        }
        return null;
    }

    //retrieve all attractions for a certain group
    public function attractions_by_target($group) {
        $records = array();
        $count = 0;
        
        // iterate over the data until we find records that match the group
        foreach ($this->all() as $record) {
            $record = (array) $record;
            
            // if record has the same target audience we are looking for
            if ($record['target_audience'] == $group) {
                $recordXML = simplexml_load_string($record['xml_desc']);
                $records[] = array('id' => $record['id'],
                    'category' => $record['category'],
                    'name' => $record['name'],
                    'contact' => (string) $recordXML->contact,
                    'address' => (string) $recordXML->address,
                    'longtext' => (string) $recordXML->longtext,
                    'date' => (string) $recordXML->date,
                    'shorttext' => (string) $recordXML->shorttext,
                    'image1' => (string) $recordXML->images->image[0],
                    'image2' => (string) $recordXML->images->image[1],
                    'image3' => (string) $recordXML->images->image[2],
                    'price_range' => $record['price_range'],
                    'target_audience' => $record['target_audience']);
                $count++;
            }
        }
        if ($count > 0) {
            return $records;
        }
        return null;
    }

}
