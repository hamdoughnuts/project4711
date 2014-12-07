<?php

/**
 * This is a model for attractions, but with temporary data
 *
 * @author glo and dtran
 */
class Users extends MY_Model {

    var $data = array();

    /*
     * Constructor
     */

    public function __construct() {
        parent::__construct('users', 'id');
    }

}
