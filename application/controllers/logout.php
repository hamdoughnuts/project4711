<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Logout extends Application {
    function index() {
        $this->session->sess_destroy();
        $this->load->helper('url');
        $this->checkForAdmin();
        redirect('login');
    }
}

