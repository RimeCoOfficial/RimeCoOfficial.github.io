<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller
{
    private $flow_stage = ['facebook', 'google', 'linkedin', 'instagram', 'twitter', 'tumblr'];

    function __construct()
    {
        parent::__construct();
        
        $this->data = array();
        
        $this->load->library('user/lib_user_login');
        $logged_in_user = $this->lib_user_login->get_user();
        
        if (empty($logged_in_user))
        {
            if ($this->input->is_ajax_request()) show_error('user must sign in');
            else redirect('auth/sign-in?redirect='.rawurlencode(uri_string_q()));
        }

        $this->data['logged_in_user'] = $logged_in_user;
    }

    private function _get_next($service = NULL)
    {
        if (empty($service)) $service = $this->flow_stage[0];

        $user_id = $this->data['logged_in_user']['user_id'];

        $this->load->library('service/lib_actor');
        $actor_list = $this->lib_actor->get_actor_list_user_added($user_id);

        $actor_list_added = [];
        foreach ($actor_list as $actor)
        {
            $actor_list_added[ $actor['service'] ] = $actor['service'];
        }

        $count = count($this->flow_stage);
        $i = 0;
        for ($i=0; $i < $count; $i++)
        {
            if ($service == $this->flow_stage[ $i ]) break;
        }

        $i = $i+1;

        for ($j=$i; $j < $count; $j++)
        {
            if (!in_array($this->flow_stage[ $j ], $actor_list_added)) break;
        }

        if ($j < $count)    return $this->flow_stage[ $j ];
        else                return NULL;
    }

    function index()
    {
        $next = $this->_get_next();

        if (!empty($next))  redirect('start/add/'.$next);
        else                redirect();
    }

    function add($service, $oauth_id = NULL)
    {
        if (!in_array($service, $this->flow_stage)) show_error('invalid flow');

        $count = count($this->flow_stage);
        $this->data['step_total'] = $count;

        for ($i=0; $i < $count; $i++) if ($this->flow_stage[ $i ] == $service) break;
        $this->data['step'] = $i + 1;

        $this->data['next'] = $this->_get_next($service);

        $this->config->load('service', TRUE);
        $service_info = $this->config->item('info', 'service');

        if (!empty($oauth_id))
        {
            $this->load->library('service/lib_actor');
            $this->data['oauth_actor_list'] = $this->lib_actor->get_oauth_actor_batch(array($oauth_id));

            $this->data['oauth_id'] = $oauth_id;
        }

        if (empty($service_info[ $service ])) show_error('invalid service');

        $this->data['service'] = $service;
        $this->data['service_name'] = $service_info[ $service ]['name'];
        $this->data['main_content'] = $this->load->view('start/layout', $this->data, TRUE);
        $this->data['page_title'] = 'Start with '.$this->data['service_name'];

        $this->load->view('base', $this->data);
    }

    public function get_actor_list($oauth_id)
    {
        if (!$this->input->is_ajax_request())
        {
            show_error('No direct script access allowed');
        }

        if ($this->session->tempdata('oauth_id') != $oauth_id)
        {
            show_error('oauth id not found');
        }
        
        $this->load->library(array('service/lib_service_sync'));
        $this->lib_service_sync->force_update_actor_list($oauth_id);

        $this->load->library('service/lib_actor');
        $data['oauth_actor_list'] = $this->lib_actor->get_oauth_actor_batch(array($oauth_id));

        $data['logged_in_user'] = $this->data['logged_in_user'];
        $data['oauth_id'] = $oauth_id;

        $this->load->view('start/actor_list', $data);
    }
}