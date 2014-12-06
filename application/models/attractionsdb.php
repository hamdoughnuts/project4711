<?php

/**
 * This is our attractions database model that is bound to current
 * attraction database table.
 *
 * @author Danny Tran & Germaine Lo
 */
class AttractionsDB extends MY_Model {

    // constructor
    function __construct() {
        parent::__construct('attractions', 'id');
    }
    
    
    //retrieve the different categories
    public function get_cats(){
        $categories = array ('eat','sleep', 'play');
        
        //$categories_filtered = array_unique($categories['category']);
        return $categories;
    } 
    
    
    //retrieve all attractions for a certain category
    public function all_for_cat($category){
        $records = array();
        $count = 0;
        //itreate over the data until we find records that match the category
        foreach ($this->all() as $record){
            $record = (array)$record;        
                        
            if ($record['category'] == $category){
                $recordXML = simplexml_load_string($record['xml_desc']);
                $records[] = array('id' => $record['id'], 
                    'category' => $record['category'], 
                    'name' => $record['name'],
                    'contact' => (string)$recordXML->contact, 
                    'address' => (string)$recordXML->address,
                    'longtext' => (string)$recordXML->longtext,
                    'date' => (string)$recordXML->date,
                    'shorttext' => (string)$recordXML->shorttext,
                    'image1' => (string)$recordXML->images->image[0],
                    'image2' => (string)$recordXML->images->image[1],
                    'image3' => (string)$recordXML->images->image[2],
                    'price_range' => $record['price_range'], 
                    'target_audience' => $record['target_audience']);
                $count++;
            }
        }
        if ($count > 0){
            return $records;
        }
        return null;
    } 
    
    
    //retrieve the most recent attraction for the category
    public function recent_for_cat($category){
        $recent = null;
        
        foreach($this->all() as $record){
            $record = (array)$record;
            if($record['category'] == $category){
                $recent = $record;
            }
        }
        //iterate over the data until we find the most recently published article
        foreach($this->all() as $record){
            $record = (array)$record;
            if($record['date_added'] > $recent['date_added'])
            {
                if($record['category'] == $category){ 
                    $recent = $record; 
                }
            }
        }
        return $recent;        
    } 


    // retrieve the most recently added attraction
    public function get_most_recent() {
        $allrecs = (array)$this->all();
        $recent = (array)$allrecs[0];
        //iterate over the data until we find the most recently published article
        foreach($allrecs as $record){
            $record = (array)$record;
            $recentXML = simplexml_load_string($recent['xml_desc']);
            $recordXML = simplexml_load_string($record['xml_desc']);
            if(date($recordXML->date_added) > date($recentXML->date_added))
            {
                $recent = $record;
            }
        }
        //return $recent;
        $recentXML = simplexml_load_string($recent['xml_desc']);
        
        return array('id' => $recent['id'], 
                    'category' => $recent['category'], 
                    'name' => $recent['name'],
                    'contact' => (string)$recentXML->contact, 
                    'address' => (string)$recentXML->address,
                    'longtext' => (string)$recentXML->longtext,
                    'date' => (string)$recentXML->date,
                    'shorttext' => (string)$recentXML->shorttext,
                    'image1' => (string)$recentXML->images->image[0],
                    'image2' => (string)$recentXML->images->image[1],
                    'image3' => (string)$recentXML->images->image[2],
                    'price_range' => $recent['price_range'], 
                    'target_audience' => $recent['target_audience']);
    } 
    
    //override of the get one function from My_Model
    function get__with_XML($key, $key2 = null) {
        //call the parent get method
        $record = (array)$this->get($key);
        $recordXML = simplexml_load_string($record['xml_desc']);
        $images = array();
        foreach($recordXML->images->image as $image){
            $images[] = array('image' => $image);
        }
        return array('id' => $record['id'], 
                    'category' => $record['category'], 
                    'name' => $record['name'],
                    'contact' => (string)$recordXML->contact, 
                    'address' => (string)$recordXML->address,
                    'longtext' => (string)$recordXML->longtext,
                    'date' => (string)$recordXML->date,
                    'shorttext' => (string)$recordXML->shorttext,
                    'image1' => (string)$recordXML->images->image[0],
                    'image2' => (string)$recordXML->images->image[1],
                    'image3' => (string)$recordXML->images->image[2],
                    'price_range' => $record['price_range'], 
                    'target_audience' => $record['target_audience'],
                    'most_popular_dish' => (string)$recordXML->most_popular_dish,
                    'single_room_rate' => (string)$recordXML->single_room_rate,
                    'double_room_rate' => (string)$recordXML->double_room_rate,
                    'entrance_fee' => (string)$recordXML->entrance_fee
            );
        }
        
     //override of the all function to include the xml
     function all_with_XML(){
         foreach ($this->all() as $record){
            $record = (array)$record;
            $recordXML = simplexml_load_string($record['xml_desc']);
            $images = array();
            foreach($recordXML->images->image as $image){
                $images[] = array('image' => $image);
            }
                
             $records[] = array('id' => $record['id'], 
                    'category' => $record['category'], 
                    'name' => $record['name'],
                    'contact' => (string)$recordXML->contact, 
                    'address' => (string)$recordXML->address,
                    'longtext' => (string)$recordXML->longtext,
                    'date' => (string)$recordXML->date,
                    'shorttext' => (string)$recordXML->shorttext,
                    'image1' => (string)$recordXML->images->image[0],
                    'image2' => (string)$recordXML->images->image[1],
                    'image3' => (string)$recordXML->images->image[2],
                    'price_range' => $record['price_range'], 
                    'target_audience' => $record['target_audience'],
                    'most_popular_dish' => (string)$recordXML->most_popular_dish,
                    'single_room_rate' => (string)$recordXML->single_room_rate,
                    'double_room_rate' => (string)$recordXML->double_room_rate,
                    'entrance_fee' => (string)$recordXML->entrance_fee);
         }
         
         return $records;
     }
}
