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
                'id' => $record->id
                , 'category' => $record->category
                , 'name' => $record->name
                , 'image1' => $record->image1
                , 'image2' => $record->image2
                , 'image3' => $record->image3
                , 'longtext' => $record->longtext
                , 'shorttext' => $record->shorttext
                , 'contact' => $record->contact
                , 'address' => $record->address
                , 'most_popular' => $record->most_popular_dish
                , 'single_room_rate' => $record->single_room_rating
                , 'double_room_rate' => $record->double_room_rating
                , 'date' => $record->date
            );
        }
        $this->data['attractions'] = $attractions;

        $this->render();
    }

    function edit($id) {
        $this->data['pagebody'] = 'edit';


        $record = $this->attractions->get($id);

        $this->load->library('session');
        //use "item" as session key
        //assume no item record in-progress
        if (!$this->session->userdata('item')) {
            $this->session->set_userdata('item', $record);
        } else {
            $item = $this->session->userdata('item');

            if ($record->id == $item->id) {

                $record = $this->session->userdata('item');
            }
        }



        $this->data['id'] = $record->id;
        $this->data['category'] = $record->category;
        $this->data['name'] = $record->name;
        $this->data['image'] = $record->image1;
        $this->data['image2'] = $record->image2;
        $this->data['image3'] = $record->image3;
        $this->data['contact'] = $record->contact;
        $this->data['address'] = $record->address;
        $this->data['longtext'] = $record->longtext;
        $this->data['shorttext'] = $record->shorttext;
        $this->data['most_popular'] = $record->most_popular_dish;
        $this->data['single_room_rate'] = $record->single_room_rating;
        $this->data['double_room_rate'] = $record->double_room_rating;

        $this->render();
    }

    function post($id) {
        $this->data['pagebody'] = 'edit';

        $config['upload_path'] = 'data';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
        $config['overwrite'] = 'TRUE';
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload', $config);



        if (empty($_POST['name'])) {
            $this->errors [] = 'Name cannot be left blank';
        }
        if(empty($_POST['category'])){
            $this->errors [] = 'Category must not be empty';
            }
            if($_POST['category'] != 'eat' || $_POST['category'] != 'play' ||$_POST['category'] != 'sleep'){
                $this->errors [] = 'Category must be "eat", "sleep", or "play"';
            }
        
        if(empty($_POST['longtext']))
            $this->errors [] = "Theres got to be something to say about this attraction, long text cannot be left empty";
        if(empty($_POST['shorttext']))
            $this->errors [] = "Theres got to be something to say about this attraction, short text cannot be left empty";
        if(empty($_POST['contact']))
            $this->errors [] = "Contact cannot be left empty";
        if(empty($_POST['address']))
            $this->errors [] = "Address cannot be left empty";
        
        if (sizeof($this->errors) > 0) {
            $to_update = $this->attractions->get($id);

            $session_record = $this->session->userdata('item');
//            $session_record->id = $id;
//            $session_record->name = $_POST['name'];
//            $session_record->category = $_POST['category'];
//            if (!empty($_POST['image1']))
//                $session_record->image1 = $_POST['image1'];
//            else
//                $session_record->image1 = $to_update->image1;
//            if (!empty($_POST['image2']))
//                $session_record->image2 = $_POST['image2'];
//            else
//                $session_record->image2 = $to_update->image2;
//            if (!empty($_POST['image3']))
//                $session_record->image3 = $_POST['image3'];
//            else
//                $session_record->image3 = $to_update->image3;
//            $session_record->longtext = $_POST['longtext'];
//            $session_record->shorttext = $_POST['shorttext'];
//            $session_record->contact = $_POST['contact'];
//            $session_record->address = $_POST['address'];
//            $session_record->most_popular = $_POST['most_popular'];
//            $session_record->single_room_rate = $_POST['single_room_rate'];
//            $session_record->double_room_rate = $_POST['double_room_rate'];

            $this->edit($id);
        } else {
            $to_update = $this->attractions->getByID($id);
            $to_update->name = $_POST['name'];
            $to_update->category = $_POST['category'];



            if ($this->upload->do_upload('image1')) {
                $to_update->image1 = $_FILES['image1']['name'];
            }

            if ($this->upload->do_upload('image2')) {
                $to_update->image2 = $_FILES['image2']['name'];
            }

            if ($this->upload->do_upload('image3')) {
                $to_update->image3 = $_FILES['image3']['name'];
            }
            $to_update->longtext = $_POST['longtext'];
            $to_update->shorttext = $_POST['shorttext'];
            $to_update->contact = $_POST['contact'];
            $to_update->address = $_POST['address'];
            $to_update->most_popular_dish = $_POST['most_popular'];
            $to_update->single_room_rating = $_POST['single_room_rate'];
            $to_update->double_room_rating = $_POST['double_room_rate'];


            $this->attractions->update($to_update);
            $this->session->unset_userdata('item');
            redirect("/admin/edit/$id");


            $this->render();
        }
    }
    
        // start a new order
    function newAttraction() {
        /* create a new order */
        $record = $this->attractions->create();
        
        /* set order number of created record to one greater than highest */
        $order_num = $this->attractions->highest() + 1;
        $record->id = $order_num;
        
        /* set date to current time and status to open (a) */
        $record->date = date('Y/m/d h:i:s', time());
        
        /* add record */
        $this->attractions->add($record);

        redirect('/admin/edit/' . $order_num);
    }

    function delete($id) {
        $this->data['pagebody'] = 'admin';
        $record = $this->attractions->get($id);
        $this->attractions->delete($record->id);

        if (file_exists(FCPATH . 'data/' . $record->image1))
            unlink(FCPATH . 'data/' . $record->image1);
        if (file_exists(FCPATH . 'data/' . $record->image2))
            unlink(FCPATH . 'data/' . $record->image2);
        if (file_exists(FCPATH . 'data/' . $record->image3))
            unlink(FCPATH . 'data/' . $record->image3);
        redirect('admin');
    }
    //displays the error messages
}
