<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller {
function __construct()
{
 parent::__construct();
 $this->load->helper('form'); // loading this for the entire class/controller
 $this->load->library('form_validation'); // loading this for the entire class/controller
 $this->load->database(); // ummm…ditto
}
public function index()
{
    $data['heading'] = "Reading from a DB";
$this->load->model('articles_model');
$data['results'] = $this->articles_model->get_articles();
$this->load->view('includes/header', $data);
$this->load->view('articles_read_view',$data);
$this->load->view('includes/footer');

}

public function detail($id)
{
/* We need to add some security and a "graceful exit: in case of a URL manipulation or other
error that prevents us from getting the required $id */
if(!is_numeric($id)){ /* if this parameter is missing, or wrong format...*/
/* best to just redirect*/
redirect('/', 'location');
}
$this->load->library('typography');
$data['heading'] = "Reading from a DB";
$this->load->model('articles_model');
$data['results'] = $this->articles_model->get_article_detail($id);
$this->load->view('includes/header',$data);
$this->load->view('articles_detail_view',$data);
$this->load->view('includes/footer');
}// \ detail

public function write()
 {
    if (!$this->ion_auth->logged_in())
 {
 redirect('/auth/login/');
 }else{
 $data['author_id'] = $this->ion_auth->user()->row()->id;
 }

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
$this->form_validation->set_rules('title', 'Article Title',
'required|min_length[3]|max_length[40]');
$this->form_validation->set_rules('title', 'Article Title',
'required|min_length[3]|max_length[40]');
$this->form_validation->set_rules('description', 'Description',
'required|min_length[20]|max_length[2000]');
 if ($this->form_validation->run() == FALSE)
 {
 $this->load->view('includes/header');
 $this->load->view('articles_write_view');
 $this->load->view('includes/footer');
 }
 else
 {

    $config['upload_path'] = 'uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '10000';
$config['max_width'] = '4000';
$config['max_height'] = '3000';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload())
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('includes/header');
$this->load->view('articles_write_view', $error);// this will display upload errors thru
$this->load->view('includes/footer');
}else{
echo "all good";
$tmp = array('upload_data' => $this->upload->data());
$filename = $tmp['upload_data']['file_name'];
// resize image, and move it
$this->load->library('image_lib');
$config1['image_library'] = 'gd2';
$config1['source_image'] = 'uploads/'. $filename;
$config1['new_image'] = 'uploads/thumbnails/'. $filename;
$config1['create_thumb'] = TRUE;
$config1['maintain_ratio'] = TRUE;
$config1['width'] = 300;
$config1['height']= 300;
$this->image_lib->initialize($config1);
$this->image_lib->resize();
$this->image_lib->clear();

 }

 //echo "SUCCESS";
 // retrieve POSTED form data
 $data['title'] = $this->input->post('title');
 $data['description']= $this->input->post('description');
 $data['filename']= $this->input->post('filename');
 $this->load->model('articles_model');
 $this->articles_model->insert_article($data);

 $this->session->set_userdata('message', 'Insert Successful');
 redirect("articles/index", 'location');
 }
} // \ write

    public function edit($id) // we change the name to edit from write and we add the $id parameter
    {
        if (!$this->ion_auth->logged_in())
        {
        redirect('/auth/login/');
        }else{
        $data['author_id'] = $this->ion_auth->user()->row()->id;
        }
        
        if(!is_numeric($id)){
            redirect('/', 'location');
            }
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('title', 'Article Title',
    'required|min_length[3]|max_length[40]');
    $this->form_validation->set_rules('description', 'Description',
    'required|min_length[20]|max_length[2000]');

    $this->load->model('articles_model'); // just moved this up so we can call the model function

    if ($this->form_validation->run() == FALSE)
    {
        $data['results'] = $this->articles_model->get_article_detail($id);

    $this->load->view('includes/header');
    $this->load->view('articles_edit_view', $data); // a new view here
    $this->load->view('includes/footer');
    }
    else
    {
    $data['title'] = $this->input->post('title');
    $data['description']= $this->input->post('description');
    $this->load->model('articles_model');

    }
    } 


    public function delete($id)
{
    if(!is_numeric($id)) {
        redirect('/', 'location');
    }

    $this->load->model('articles_model');
    $this->articles_model->delete_article($id);

    $this->session->set_userdata('message', 'Delete Successful');
    redirect("articles/index", 'location');
}

}