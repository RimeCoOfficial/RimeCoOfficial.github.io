<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->data = array();
        
        $this->load->library('user/lib_user_login');
        $logged_in_user = $this->lib_user_login->get_user();
        $this->data['logged_in_user'] = $logged_in_user;
    }

    public function index($page_index = 0)
    {
        $user_id = 0;
        if (!empty($this->data['logged_in_user'])) $user_id = $this->data['logged_in_user']['user_id'];

        $local_data = array();
        $local_data['logged_in_user'] = $this->data['logged_in_user'];
        
        $this->data['page_title'] = 'Search';
        
        $this->form_validation->set_data($this->input->get(NULL));

        $query = NULL;
        $this->load->library('search/lib_search');
        if ($this->form_validation->run('search')) $query = $this->form_validation->set_value('q');

        $local_data['user_list'] = $this->lib_search->user($query, 'search/index', $page_index, $user_id);

        $this->data['main_content'] = $this->load->view('search/layout', $local_data, TRUE);
        $this->load->view('base', $this->data);
    }
}