<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TX_Controller extends CI_Controller
{
    var $url_segments;
    var $css_files;
    var $js_files;

    function __construct()
    {
        parent::__construct();

        $this->url_segments = array();
        $segment_index = 1;
        while ($this->uri->segment($segment_index, 0) != null) {
            array_push($this->url_segments, $this->uri->segment($segment_index, 0));
            $segment_index++;
        }

        // css files
        $this->css_files = array();
        array_push($this->css_files, '/vendors/font-awesome.min.css');
        array_push($this->css_files, '/vendors/animate.min.css');
        array_push($this->css_files, '/vendors/github.css');
        array_push($this->css_files, '/css/style-guide.css');

        // javascript files
        $this->js_files = array();
        array_push($this->js_files, '/vendors/jquery.min.js');
        array_push($this->js_files, '/vendors/holder.min.js');
        array_push($this->js_files, '/vendors/popper.min.js');
        array_push($this->js_files, '/vendors/bootstrap.min.js');
        array_push($this->js_files, '/vendors/rainbow.min.js');
        array_push($this->js_files, '/js/style-guide.js');
    }

    public function index()
    {
        $this->load->view('common/page_default', $this->init_data());
    }

    protected function init_data()
    {
        $data = array();

        // page title
        $data['page_title'] = 'FEI | Style Guide';

        // url
        $data['url_segments'] = $this->url_segments;

        // page classes
        $data['page_classes'] = 'fei fei-theme';
        foreach($this->url_segments as $segment) {
            if($data['page_classes']) {
                $data['page_classes'] = $data['page_classes'] . ' ' . $segment;
            }
        }

        // content
        $data['content'] = $this->url_segments[0];
        for($i = 1; $i < count($this->url_segments); $i++) {
            $data['content'] .= '/' . $this->url_segments[$i];
        }
        $data['content'] .= '/content';


        $data['css_files'] = $this->css_files;
        $data['js_files'] = $this->js_files;

        return $data;
    }

    /**
    public function _remap($method)
    {
        $this->index();
    }*/
}