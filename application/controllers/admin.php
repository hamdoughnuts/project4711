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

    function edit($id) {
        $this->data['pagebody'] = 'edit';

        $record = $this->attractions->getByID($id);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    function post($id) {
        $this->data['pagebody'] = 'edit';

        $name = check_input($_POST['name']);
        $category = check_input($_POST['category']);
        $image1 = check_input($_POST['image1']);
        $image2 = check_input($_POST['image2']);
        $image3 = check_input($_POST['image3']);
        $longtext = check_input($_POST['longtext']);
        $shorttext = check_input($_POST['shorttext']);
        $contact = check_input($_POST['contact']);
        $address = check_input($_POST['address']);
        $most_popular = check_input($_POST['most_popular']);
        $single_room_rate = check_input($_POST['single_room_rate']);
        $double_room_rate = check_input($_POST['double_room_rate']);

        $sql = mysql_query("UPDATE attractions SET "
                . "name = '$name'"
                . ",category ='$category'"
                . ",image1 ='$image1'"
                . ",image2 ='$image2'"
                . ",image3 ='$image3'"
                . ",category ='$image3'"
                . ",longtext ='$longtext'"
                . ",shorttext ='$shorttext'"
                . ",contact ='$contact'"
                . ",address ='$address'"
                . ",most_popular ='$most_popular'"
                . ",single_room_rate ='$single_room_rate'"
                . ",double_room_rate = '$double_room_rate' WHERE _id = '$id'");
                
        $record = $this->attractions->getByID($id);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    function delete($id) {
        $this->render();
    }

}
