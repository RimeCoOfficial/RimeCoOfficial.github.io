<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weblog extends CI_Controller
{
    public function index($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);
        
        // 5 latest stories
        $this->load->library('service/lib_post_feed');
        // $data['post_list_latest'] = $this->lib_post_feed->get_latest($data['user']['user_id'], 5);

        // 6 top stories
        $this->load->library('service/lib_post_feed');
        $data['post_list_popular'] = $this->lib_post_feed->get_popular($data['user']['user_id'], 6);

        $this->load->view('weblog/homepage', $data);
    }

    public function collection_navigation($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);
        
        // 3 latest stories
        $this->load->library('service/lib_post_feed');
        // $data['post_list_latest'] = $this->lib_post_feed->get_latest($data['user']['user_id'], 3);

        $data['post_type_list'] = $this->lib_post_feed->get_all_types($data['user']['user_id']);
        
        $this->load->view('weblog/collection_navigation', $data);
    }

    public function collection_landing($username = NULL, $type = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        $data['type'] = $type;
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);
        
        // 5 latest stories
        $this->load->library('service/lib_post_feed');
        // $data['post_list_latest'] = $this->lib_post_feed->get_latest_by_type($data['user']['user_id'], $type, 5);

        // 6 top stories
        $data['post_list_popular'] = $this->lib_post_feed->get_popular_by_type($data['user']['user_id'], $type, 6);

        // contributors
        $data['post_type_actor_list'] = $this->lib_post_feed->get_colleciton_actor_list($data['user']['user_id'], $type);
        
        $this->load->view('weblog/collection_landing', $data);
    }

    public function topic_navigation($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }
        
        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);
        
        // // 3 latest stories
        $this->load->library('service/lib_post_feed');
        // $data['post_list_latest'] = $this->lib_post_feed->get_latest($data['user']['user_id'], 3);

        $data['post_topic_list'] = $this->lib_post_feed->get_all_topics($data['user']['user_id']);
        
        $this->load->view('weblog/topic_navigation', $data);
    }

    public function topic_landing($username = NULL, $word = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        $data['word'] = $word;
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);
        
        // 5 latest stories
        $this->load->library('service/lib_post_feed');
        // $data['post_list_latest'] = $this->lib_post_feed->get_latest_by_word($data['user']['user_id'], $word, 5);

        // contributors
        $data['post_type_actor_list'] = $this->lib_post_feed->get_topic_actor_list($data['user']['user_id'], $word);
        
        $this->load->view('weblog/topic_landing', $data);
    }

    public function post($username = NULL, $post_id = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);

        $this->load->library('service/lib_post_feed');
        if (is_null($data['post'] = $this->lib_post_feed->get($data['user']['user_id'], $post_id)))
        {
            // show_error($this->lib_post_feed->get_error_message());
            show_404();
        }

        $data['post_cross_list'] = $this->lib_post_feed->get_cross_post_list($data['user']['user_id'], $post_id, 99);

        $data['post_next_list'] = $this->lib_post_feed->get_next($data['user']['user_id'], $post_id, $data['post']['item']['published'], 3);

        $this->load->library('composer/lib_simple_html_dom_parser');
        $this->load->view('weblog/article', $data);
    }

    public function amp($username = NULL, $post_id = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);

        $this->load->library('service/lib_post_feed');
        if (is_null($data['post'] = $this->lib_post_feed->get($data['user']['user_id'], $post_id)))
        {
            // show_error($this->lib_post_feed->get_error_message());
            show_404();
        }

        $data['post_cross_list'] = $this->lib_post_feed->get_cross_post_list($data['user']['user_id'], $post_id, 99);

        $data['post_next_list'] = $this->lib_post_feed->get_next($data['user']['user_id'], $post_id, $data['post']['item']['published'], 3);

        $this->load->view('weblog/amp', $data);
    }

    public function random($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $this->load->library('service/lib_post_feed');
        if (is_null($data['post'] = $this->lib_post_feed->get_random_post($data['user']['user_id'])))
        {
            // show_error($this->lib_post_feed->get_error_message());
            show_404();
        }

        redirect('weblog/'.$data['user']['username'].'/'.$data['post']['slug'].'~'.$data['post']['post_id']);
    }

    public function rss($username = NULL, $collection = NULL, $type = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }

        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        // 10 latest stories
        $count = 10;
        $this->load->library('service/lib_post_feed');

        if ($collection == 'collections' AND !empty($type))
        {
            $data['post_list_latest'] = $this->lib_post_feed->get_latest_by_type($data['user']['user_id'], $type, $count);
        }
        else if ($collection == 'topics' AND !empty($type))
        {
            $data['post_list_latest'] = $this->lib_post_feed->get_latest_by_word($data['user']['user_id'], $type, $count);
        }
        else
        {
            $data['post_list_latest'] = $this->lib_post_feed->get_latest($data['user']['user_id'], $count);
        }

        header('Content-Type: text/xml');
        $this->load->view('weblog/rss', $data);
    }

    public function about($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }
        
        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);

        $this->load->library('service/lib_actor_about');
        $data['about_list'] = $this->lib_actor_about->get_list($data['user']['user_id']);

        $this->load->view('weblog/about', $data);
    }

    // search
    public function search($username = NULL)
    {
        $this->load->library('user/lib_weblog');
        if (empty($username))
        {
            // custom domain
            $domain = $_SERVER['HTTP_HOST'];
            // $domain = 'suvozit.com';

            if (is_null($weblog = $this->lib_weblog->get_by_domain($domain)))
            {
                show_404();
            }
            $username = $weblog['username'];
        }
        
        if (empty($username)) show_404();

        $data = array();
        
        $this->load->library('user/lib_user');
        if (is_null($data['user'] = $this->lib_user->get_by_username($username)))
        {
            show_404();
        }

        $data['weblog'] = $this->lib_weblog->get_by_id($data['user']['user_id']);

        $this->load->library('service/lib_actor');
        $data['actor_list'] = $this->lib_actor->get_actor_list_user_added($data['user']['user_id']);

        $this->load->view('weblog/search', $data);
    }
}