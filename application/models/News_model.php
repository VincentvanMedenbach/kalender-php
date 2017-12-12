<?php

class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('person'), 'dash', TRUE);

        $data = array(
            'year' => $this->input->post('year'),
            'day' => $this->input->post('day'),
            'month' => $this->input->post('month'),
            'person' => $this->input->post('person'),

            'slug' => $slug,

        );

        return $this->db->insert('news', $data);
    }
}