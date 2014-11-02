<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP, changes by: glo and dtran
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'COMP4711: Amsterdam';    // our default title
        $this->errors = array();
        $this->data['pageTitle'] = 'welcome';   // our default page
    }
    function scold() {
        $result = '';
        if (count($this->errors) < 1) {
            $this->data['alerting'] = '';
        } else {
            $this->data['alerting'] = 'alert alert-errors';
            foreach ($this->errors as $msg) {
                $result .= $msg . '<br/>';
            }
        }
        return $result;
    }
    /**
     * Render this page
     */
    function render() {
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

        // finally, build the browser page!
        $this->data['errormessages'] = $this->scold();
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */