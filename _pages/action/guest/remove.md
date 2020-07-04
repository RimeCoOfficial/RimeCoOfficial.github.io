---
layout: action
redirect_to: /guest/actor/username
---
class Guest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->library('user/lib_user_login');
        if (!$this->lib_user_login->is_logged_in())
        {
            show_error('user must sign in');
        }

        $logged_in_user = $this->lib_user_login->get_user();
        if ( ! ($logged_in_user['permission'] == 'founder' OR $logged_in_user['permission'] == 'guest.moderator'))
        {
            show_error('unauthorized permission');
        }
    }

    // actor
    public function create($actor_id, $oauth_id)
    {
        $logged_in_user = $this->lib_user_login->get_user();
        $user_id = $logged_in_user['user_id'];

        $this->load->library('service/lib_actor_user_guest');
        if (is_null($result = $this->lib_actor_user_guest->is_actor_available($actor_id, $oauth_id, $user_id)))
        {
            show_error($this->lib_actor_user_guest->get_error_message());
        }

        $actor = $result['actor'];

        if (!($actor['service'] == 'twitter' AND $actor['kind'] == 'user'))
        {
            show_error('create guest account using twiiter');
        }

        $this->load->config('form_element', TRUE);
        $element = $this->config->item('full_name', 'form_element');
        $full_name_max_length = $element['max_length'];

        $element = $this->config->item('username', 'form_element');
        $username_max_length = $element['max_length'];

        $element = $this->config->item('bio', 'form_element');
        $bio_max_length = $element['max_length'];

        $element = $this->config->item('location', 'form_element');
        $location_max_length = $element['max_length'];

        // $actor['username']    =    character_limiter($actor['username'],    $username_max_length);
        $actor['full_name']   = mb_character_limiter($actor['full_name'],   $full_name_max_length);
        $actor['description'] = mb_character_limiter($actor['description'], $bio_max_length, '...');
        $actor['location']    = mb_character_limiter($actor['location'],    $location_max_length);

        $this->load->library('user/lib_user');
        if (is_null($actor['username'] = $this->lib_user->available_username($actor['username'], $username_max_length)))
        {
            show_error($this->lib_user->get_error_message());
        }

        $new_user_result = $this->lib_user_login->create_guest_user(
            $actor, $oauth_id, strtolower($actor['username']).'@guest.noreply.rime.co', $logged_in_user['user_id']);

        redirect('guest/user/'.$actor['username']);
    }

    public function add($guest_user_id, $actor_id, $oauth_id)
    {
        $logged_in_user = $this->lib_user_login->get_user();
        $user_id = $logged_in_user['user_id'];

        $this->load->library('service/lib_actor_user_guest');
        if (is_null($result = $this->lib_actor_user_guest->is_actor_available($actor_id, $oauth_id, $user_id)))
        {
            show_error($this->lib_actor_user_guest->get_error_message());
        }

        $actor = $result['actor'];

        if ($actor['service'] == 'twitter' AND $actor['kind'] == 'user')
        {
            show_error('only one twiiter account to be added to each guest');
        }

        if (is_null($guest_user = $this->lib_actor_user_guest->add_actor($actor_id, $oauth_id, $guest_user_id, $user_id)))
        {
            show_error($this->lib_actor_user_guest->get_error_message());
        }

        $this->session->set_flashdata('alert', '<strong>Success:</strong> '.$actor['service'].' - '.$actor['kind'].' added to '.$guest_user['full_name']);
        redirect('guest/user/'.$guest_user['username']);
    }

    public function remove($guest_user_id, $activity_id)
    {
        $logged_in_user = $this->lib_user_login->get_user();
        $user_id = $logged_in_user['user_id'];

        $this->load->library('service/lib_actor_user_guest');
        if (is_null($guest_user = $this->lib_actor_user_guest->remove_actor($guest_user_id, $activity_id, $user_id)))
        {
            show_error($this->lib_actor_user_guest->get_error_message());
        }

        $this->session->set_flashdata('alert', '<strong>Success:</strong> Removed from '.$guest_user['full_name']);
        redirect('guest/user/'.$guest_user['username']);
    }

    // // oauth
    // public function replace($guest_user_id, $actor_id, $oauth_id)
    // {
    //   $logged_in_user = $this->lib_user_login->get_user();
    //   $user_id = $logged_in_user['user_id'];

    //   var_dump($actor_id, $oauth_id, $user_id); die();
    // }
}