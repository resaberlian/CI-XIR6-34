<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser()
    {
        
      
        $this->load->model('Model_user');
        $query = $this->Model_user->checkLogin();
        $username = $query[0]->username;

        $listSession = array(
            'username' => $username
        );
        
        $this->session->set_userdata( $listSession );
        

        $this->session->set_flashdata('success','you are logged in');
        
        redirect('Home/Dashbord');
        

       
    }

public function logoutUser()
{
   // unset($_SESSION);
   $this->session->sess_destroy();
    redirect('Home/Index');
}

}
/* End of file Login.php */

?>