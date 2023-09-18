<?php 
class User extends CI_Controller{

public function __construct(){
parent::__construct();
        $this->load->database();
        $this->load->model('UserModel');
$this->load->model('UserModel');
}

function index() {
    $data['item']=$this->UserModel->getItem();
    $this->load->view('user/index',$data);
}



function add() {

    if($_SERVER['REQUEST_METHOD']=='POST'){
     $ItemName = $this->input->post('ItemName');
            $ItemDetails = $this->input->post('ItemDetails');
            $data = array(
                'ItemName' => $ItemName,
                'ItemDetails' => $ItemDetails
        );
    $status= $this->UserModel->InsertItem($data); if ($status == true) {
                $this->session->set_flashdata('success', 'Success');
                redirect(base_url('User/index')); // Redirect to the correct route
            } else {
                $this->session->set_flashdata('error', 'Error');
            }
        } else 
        {
            $this->load->view('user/add');
        }

}

            function edit($id){

                $data['user'] = $this->UserModel->getUser($id);
                $data['id']= $id;
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $ItemName = $this->input->post('ItemName');
                        $ItemDetails = $this->input->post('ItemDetails');
                        $data = array(
                            'ItemName' => $ItemName,
                            'ItemDetails' => $ItemDetails
                        );

                        $status = $this->UserModel->updateUser($data, $id);
                        if ($status == true) {
                            $this->session->set_flashdata('success', 'Success');
                            // redirect(base_url('User/edit/' .$id)); // Redirect to the correct route
                            
                            redirect(base_url('User/index'));
                            
                        } else {
                            $this->session->set_flashdata('error', 'Error');
                            $this->load->view('user/edit_user');
                        }
            }


            $this->load->view('user/edit', $data);

            }
//delete function
            function delete($id){
                if (is_numeric($id)) {
                 $status =  $this->UserModel->deleteUser($id);
                     if ($status == true) {
                            $this->session->set_flashdata('success', 'Success');
                            // redirect(base_url('User/edit/' .$id)); // Redirect to the correct route
                            
                            redirect(base_url('User/index'));
                            
                        } else {
                            $this->session->set_flashdata('error', 'Error');
                            $this->load->view('user/index');
                        }
                }
            }

}