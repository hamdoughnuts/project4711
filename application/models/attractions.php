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
}
