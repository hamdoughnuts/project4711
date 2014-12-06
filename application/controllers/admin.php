<?php

/**
 * Our admin page. 
 * 
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
        $this->restrict(ADMIN);
        $this->checkForAdmin();
    }

    // renders admin page showing the id, category, name and date added
    function index() {
                //check if admin is logged in
        $userRole = $this->session->userdata('userRole');
        if ($userRole == null) {
            redirect('/login');
        }
        // this is the view we want shown
        $this->data['pagebody'] = 'admin';

        // build the list of attractions, to pass on to our view
        $source = $this->attractionsdb->all_with_XML();
        $attractions = array();

        foreach ($source as $record) {
            $attractions[] = array(
                'id' => $record['id']
                , 'category' => $record['category']
                , 'name' => $record['name']
                , 'date' => $record['date']
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
            if ($this->attractions->exists($id))
                $item_record = $this->attractionsdb->get__with_XML($id);
            // else create an item record with the id
            else {
                $item_record = $this->attractionsdb->create();
                $item_record['id'] = $id;
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

    // handle an attraction edit form submission
    function post($id) {
        // config uploader settings and load helpers and libraries
        $config['upload_path'] = 'data';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
        $config['overwrite'] = 'TRUE';
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload', $config);

        // validating fields
        if (empty($_POST['name'])) {
            $this->errors[] = 'Name cannot be left blank';
        }
        if (empty($_POST['category'])) {
            $this->errors[] = 'Category must not be empty';
        }
        $categories = array("eat", "sleep", "play");
        if (!in_array($_POST['category'], $categories)) {
            $this->errors[] = 'Category must be "eat", "sleep", or "play"';
        }
        if (empty($_POST['longtext']))
            $this->errors[] = "Long text cannot be left empty";
        if (empty($_POST['shorttext']))
            $this->errors[] = "Short text cannot be left empty";
        if (empty($_POST['contact']))
            $this->errors[] = "Contact cannot be left empty";
        if (empty($_POST['address']))
            $this->errors[] = "Address cannot be left empty";

        // get the session item record
        $to_update = $this->session->userdata('item');
        // over-riding any edited fields in the session record
        if ($this->attractions->exists($id))
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
        
        // category specific fields
        if ($to_update->category == 'eat')
            $to_update->most_popular_dish = $_POST['most_popular'];
        if ($to_update->category == 'sleep') {
            $to_update->single_room_rate = $_POST['single_room_rate'];
            $to_update->double_room_rate = $_POST['double_room_rate'];
        }
        if ($to_update->category == 'play') {
            $to_update->entrance_fee = $_POST['entrance_fee'];
        }
        
        // update the session item
        $this->session->set_userdata('item', $to_update);

        // update or create if ok
        if (count($this->errors) < 1) {
            // check if updating
            if ($this->attractions->exists($id)) {
                // update record in db
                $this->attractions->update($to_update);
                // remove the item record from the session container
                $this->session->unset_userdata('item');
                $this->index();
            } else {
                // set id
                $to_update->id = $id;
                // date will be for when attraction is added
                $to_update->date = date('Y/m/d h:i:s', time());
                // add the attraction
                $this->attractions->add($to_update);
                // remove the item record from the session container
                $this->session->unset_userdata('item');
                $this->index();
            }
        } else {
            // update or create is not ok redirect to edit page
            $this->edit($id);
        }
    }

    // start a new attraction
    function newAttraction() {
        // get an id number for a new attraction
        $id = $this->attractions->highest() + 1;
        // redirect to edit form with the new id
        redirect('/admin/edit/' . $id);
    }

    // deletes an attraction from the db table
    function delete($id) {
        $this->data['pagebody'] = 'admin';

        // get the record that we want to delete
        $record = $this->attractions->get($id);
        // delete the record
        $this->attractions->delete($record->id);

        // delete associated images
        if (file_exists(FCPATH . 'data/' . $record->image1))
            unlink(FCPATH . 'data/' . $record->image1);
        if (file_exists(FCPATH . 'data/' . $record->image2))
            unlink(FCPATH . 'data/' . $record->image2);
        if (file_exists(FCPATH . 'data/' . $record->image3))
            unlink(FCPATH . 'data/' . $record->image3);

        redirect('/admin/');
    }

}
