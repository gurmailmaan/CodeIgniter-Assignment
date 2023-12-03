<?php
//controllers/Birds.php
defined('BASEPATH') OR exit('No direct script access allowed');
class Birds extends CI_Controller {
public function index()
{
    $data['heading'] = "The Birds of Alberta";
$data['picture'] = "owl.jpg";
$data['message'] = "<p>Birds (class Aves or clade Avialae) are feathered, winged, two-legged,
warm-blooded, egg-laying vertebrates. Aves ranks as the tetrapod class with the most living species, approximately
ten thousand. </p>
<p>Extant birds belong to the subclass Neornithes, living worldwide and ranging in size from the
5 cm (2 in) Bee Hummingbird to the 2.75 m (9 ft) Ostrich. The fossil record indicates that birds emerged within the
theropod dinosaurs during the Jurassic period, around 150 million years ago. <br>Most researchers agree that
modern-day birds are the only living members of the Dinosauria clade.</p>";
$this->load->view('includes/header',$data);
$this->load->view('includes/header',$data);// we need to pass the array to the view
$this->load->view('includes/footer');

}
public function loon()
{
echo "Birds - Loon";
}
public function sparrow()
{
echo "Birds - Sparrow";
}

}