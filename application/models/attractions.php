<?php

/**
 * This is a model for attractions, but with temporary data
 *
 * @author glo and dtran
 */
class Attractions extends MY_Model {

    var $data = array();

    /*
     * Constructor
     */

    public function __construct() {
        parent::__construct('attractions','id');
    }

    /*
     * Retrieves a single attraction by ID
     */

    public function getByID($id) {
        $temp = $this->attractions->get($id);
        return $temp;
        // iterate over the data until we find the one we want
//        foreach ($this->data as $record)
//            if ($record['id'] == $id)
//                return $record;
//        return null;
    }

    /*
     * Retrieves all attractions
     */

    public function getAll() {
        return $this->attractions->all();
    }

    /*
     * Retrieves all attractions in a category
     */

    public function getByCategory($category) {
        
        
        $records = $this->attractions->some('category', $category);
//        // iterate over the data and find the ones matching category
//        foreach ($this->data as $record)
//            if ($record['category'] == $category)
//                $records[] = $record;
        return $records;
    }

    /*
     * Retrieves the most recent attraction by date value
     */

    public function getMostRecent() {
        $records = $this->attractions->all();
        
        $temp = $this->attractions->get(1);
        // iterate over the data and return most recent
        foreach ($records as $record)
            if ($record->date > $temp->date)
                $temp = $record;
        return $temp;
    }

    /*
     * Retrieves the first attraction
     */

    public function getFirst() {
        return $this->data[0];
    }

    /*
     * Retrieves the last attraction
     */

    public function getLast() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
