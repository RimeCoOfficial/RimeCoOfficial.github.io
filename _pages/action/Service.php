<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function add($service = NULL)
    {
        if (empty($service)) show_404();
        
        $this->load->library('service/lib_service_oauth');
        if (is_null($this->lib_service_oauth->get_request_token($service)))
        {
            show_error($this->lib_service_oauth->get_error_message());
        }
    }
    
    public function callback($service = NULL)
    {
        if (empty($service)) show_404();

        $this->load->library('service/lib_service_oauth');
        if (is_null($oauth_id = $this->lib_service_oauth->get_access_token($service)))
        {
            show_error($this->lib_service_oauth->get_error_message());
        }
        $this->session->set_tempdata('oauth_id', $oauth_id); // will be erased after 300 seconds

        $this->session->set_flashdata('flash_oauth_id', TRUE);

        // $this->load->library('user/lib_user_login');
        // if ($this->lib_user_login->is_logged_in())  redirect('service');
        // else                                        redirect('auth/sign-in');

        exit('<script>parent.close()</script>');
    }
}