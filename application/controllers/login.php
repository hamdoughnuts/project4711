<?php

class Login extends Application {

    function index() {
        $this->data['title'] = 'Login Page';
        $this->data['pagebody'] = 'login';
        $this->load->helper('formfields');

        $this->data['fid'] = makeTextField('Username', 'id', "", "", 20, 20, false, 'whiteWords');
        $this->data['fpassword'] = makeTextField('Password', 'password', "", "", 20, 20, false, 'whiteWords');
        $this->data['fsubmit'] = makeSubmitButton('Login', 'logging in');
        $this->checkForAdmin();
        $this->render();
    }
    //A Function that gets called after the form is posted and this will validate
    //whether the user can log in
    function submit() {
        if (empty($_POST['id']))
            $this->errors[] = "username cannot be empty";
        if (empty($_POST['password']))
            $this->errors[] = "password cannot be empty";


        $key = $_POST['id'];
        $password = md5($_POST['password']);

        if ($this->users->exists($key)) {
            $user = $this->users->get($key);
        } else {

            $this->errors[] = "Username does not exist";
        }

        //validation starts here
        if (count($this->errors) < 1) {
            //validation ends
            if ($password == (string) $user->password) {
                $this->session->set_userdata('userID', $key);
                $this->session->set_userdata('userName', $user->name);
                $this->session->set_userdata('userRole', $user->role);

                redirect('/');
            } else {
                $this->errors[] = "passwords is incorrect";
                $this->index();
            }
        } else {
            $this->index();
        }
    }

}
