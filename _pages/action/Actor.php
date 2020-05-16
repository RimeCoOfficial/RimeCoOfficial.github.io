<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // if (!$this->input->is_ajax_request())
        // {
        //   show_error('No direct script access allowed');
        // }

        $this->load->library('user/lib_user_login');
        if (!$this->lib_user_login->is_logged_in())
        {
            show_error('user must sign in');
        }
    }

    public function add($actor_id = NULL, $oauth_id = NULL)
    {
        $logged_in_user = $this->lib_user_login->get_user();
        $user_id = $logged_in_user['user_id'];

        $this->load->library('service/lib_actor');

        if ($this->session->tempdata('oauth_id') != $oauth_id AND !$this->lib_actor->is_oauth_owner($oauth_id, $user_id))
        {
            show_error('oauth id not found');
        }

        if (is_null($this->lib_actor->add_actor_user($actor_id, $oauth_id, $user_id)))
        {
            show_error($this->lib_actor->get_error_message());
        }

        $this->session->set_flashdata('alert', 'Service is added. It may take an hour to sync your posts.');

        $redirect = $this->input->get('redirect');
        $redirect = !empty($redirect) ? $redirect : 'service';
        redirect($redirect);
    }

    public function remove($actor_id = NULL)
    {
        $logged_in_user = $this->lib_user_login->get_user();
        $user_id = $logged_in_user['user_id'];
        
        $this->load->library('service/lib_actor');
        $this->lib_actor->remove_actor_user($actor_id, $user_id);

        $this->session->set_flashdata('alert', 'Service is removed.');
        
        $redirect = $this->input->get('redirect');
        $redirect = !empty($redirect) ? $redirect : 'service';
        redirect($redirect);
    }
}