<?php
/**
 * Created by JetBrains PhpStorm.
 * User: brian
 * Date: 5/27/12
 * Time: 8:08 PM
 * To change this template use File | Settings | File Templates.
 */
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->helper('security');

        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');

        $this->load->view('login_success', $data);
    }
}
