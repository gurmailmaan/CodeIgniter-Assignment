<?php
class articles_model extends CI_Model {
 function __construct()
 {
 // Call the Model constructor
 parent::__construct();
 }
function get_articles(){
$query = $this->db->get('articles');
if ( $query->num_rows() > 0 ){
return $query->result();
}else{
return FALSE;
}
}

function get_article_detail($id){
    $this->db->where('article_id', $id);
    $query = $this->db->get('articles');
    if ( $query->num_rows() > 0 ){
    return $query->result();
    }else{
    return FALSE;
    }
    }

    function insert_article($data) {
        if (isset($_FILES['filename']) && $_FILES['filename']['error'] == UPLOAD_ERR_OK) {
            // An image was uploaded
            $data['filename'] = $_FILES['filename']['name'];
            move_uploaded_file($_FILES['filename']['tmp_name'], 'uploads/' . $_FILES['filename']['name']);
        } else {
            // No image was uploaded
            $data['filename'] = NULL;
        }
    
        $this->db->insert('articles', $data);
    }
    

    function edit_article($data,$id){
$this->db->where('article_id', $id);
$this->db->update('articles', $data);
}

    function delete_article($id){
        $this->db->where('article_id', $id);
        $this->db->delete('articles');
    }
}