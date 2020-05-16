<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->data = array();
        
        $this->load->library('user/lib_user_login');
        $logged_in_user = $this->lib_user_login->get_user();
        
        if (empty($logged_in_user))
        {
            if (!$this->input->is_ajax_request())
            {
                redirect('auth/sign-in?redirect='.rawurlencode(uri_string_q()));
            }
            else show_error('user must sign in');
        }
        
        $this->data['page_title'] = 'People';

        $this->data['logged_in_user'] = $logged_in_user;
    }
    
    public function index()
    {
        redirect('people/invite'); // $this->invite();
    }
    
    public function invite($start_email_id = NULL)
    {
        $user_id = $this->data['logged_in_user']['user_id'];

        $local_data = array();

        $local_data['user'] = $this->data['logged_in_user'];
        
        // $local_data = $this->invite_by_email(NULL, $local_data);

        $this->load->library('people/lib_invite');
        $local_data['invites_count'] = $this->lib_invite->get_invites_count($user_id);
        
        $search_query = $this->input->get('q');

        $local_data['contact_email_list'] = $this->lib_invite->get_email_list($user_id, 'people/invite', $search_query, $start_email_id);

        $this->data['page_title'] = 'Invite Your Friends';

        $this->data['main_content'] = $this->load->view('people/invite', $local_data, TRUE);
        $this->data['main_content'] = $this->load->view('people/layout', $this->data, TRUE);
        $this->load->view('base', $this->data);
    }

    public function find($type = NULL, $start_user_id = NULL)
    {
        if (empty($type)) redirect('people/find/actor');

        $local_data = array();
        
        $user_id = $this->data['logged_in_user']['user_id'];
        $local_data['logged_in_user'] = $this->data['logged_in_user'];

        $user_id = $this->data['logged_in_user']['user_id'];
        
        $this->load->library('people/lib_contact');
        if ($type == 'actor')
        {
            $local_data['people_list'] = $this->lib_contact->find_actor($user_id, 'people/find/'.$type, $start_user_id);
        }
        else
        {
            $local_data['people_list'] = $this->lib_contact->find_email($user_id, 'people/find/'.$type, $start_user_id);
        }

        $local_data['type']= $type;
        
        $this->data['page_title'] = 'Find People';

        $this->data['main_content'] = $this->load->view('people/find', $local_data, TRUE);
        $this->data['main_content'] = $this->load->view('people/layout', $this->data, TRUE);
        $this->load->view('base', $this->data);
    }
}