<?php
class Auth extends CI_Controller {
    public function index(){
        $this->load->view("login");
    }
    public function pendaftaran(){
        $this->load->view("registrasi");
    }
    public function proses_daftar(){
        $data = array(
            "username"=>$this->input->post("username"),
            "nama_lengkap"=>$this->input->post("fullname"),
            "password"=>md5($this->input->post("password")),
            "notelp"=>md5($this->input->post("notelp")),
            "role"=>"pelanggan",
        );
        $this->db->trans_start();
        $this->db->insert("tb_user",$data);
        $this->db->trans_complete();
        if($this->db->trans_status()===FALSE){
            $this->session->set_flashdata("gagal","Pendaftaran gagal!");
        }else{
            $this->session->set_flashdata("berhasil","Pendaftaran berhasil!");
        }
        redirect("auth");
    }
    public function login(){
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $cek = $this->db->where("username",$username)->where("password",$password)->limit(1)->get("tb_user");
        if($cek->num_rows()>0){
            foreach($cek->result() as $c){
            $this->session->set_userdata('fullname', $c->nama_lengkap);
            $this->session->set_userdata('user_id', $c->id);
            $this->session->set_userdata('username', $c->username);
            $this->session->set_userdata('notelp', $c->notelp);
            $this->session->set_userdata('role', $c->role);
            }
            redirect("welcome");
        }else{
            $this->session->set_flashdata("gagal","username atau password salah!");
            redirect("auth");
        }
    }
    public function logout(){
        session_destroy();
        redirect("auth");
    }
}