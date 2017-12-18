<?php

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['indexMonths'] = $this->News_model->list_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
//        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->News_model->get_news($slug);

//        if (empty($data['news_item'])) {
//            show_404();
//        }

        $data['title'] = $data['news_item']['person'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
//        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';


        $this->form_validation->set_rules('person', 'Person', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('day', 'Day', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');

        } else {
            $this->News_model->set_news();
            $this->load->view('news/success');
        }
    }

    public function success()
    {
        $data['news'] = $this->News_model->get_news();
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
    }

    public function delete($slug = NULL)
    {
        $data['news_item'] = $this->News_model->get_news($slug);
//        if (empty($data['news_item'])) {
//            show_404();
//        }

        $slug = $this->uri->segment(3);
        $this->News_model->delete_News($slug);


        $this->load->view('templates/header', $data);
        $this->load->view('news/delete', $data);
    }


    public function edit()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a news item';
        $this->form_validation->set_rules('person', 'Person', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('day', 'Day', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);

        } else {
            $slug = url_title($this->input->post('person'), 'dash', TRUE);
            $this->News_model->edit_news($slug);
            $this->load->view('news/success');
        }
    }
}