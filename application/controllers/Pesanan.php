<?php
class Pesanan extends CI_Controller{
    public function index(){
        $this->load->view('komponen/header');
		$this->load->view('komponen/nav');
		$this->load->view('buat_pesanan');
		$this->load->view('komponen/footer');
		$this->load->view('komponen/script');
    }

	public function buat_pesanan(){
		$id = $this->session->userdata('user_id');
		$nama = $this->session->userdata('nama');
		$notelp = $this->input->post('notelp');
		$lokasi_awal = $this->input->post('lokasi_awal');
		$lokasi_tujuan = $this->input->post('lokasi_tujuan');
		$jarak = $this->input->post('jarak');
		$harga = $this->input->post('harga');
		$pembayaran = $this->input->post('pembayaran');
		$bukti = $this->input->post('bukti');
		$tanggal = date("Y-m-d H:i:s");
		$config['upload_path'] = FCPATH.'assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
  
  
        $this->load->library('upload', $config);
  
        if (!$this->upload->do_upload('bukti')) 
        {
            $this->session->set_flashdata("gagal", "pesanan gagal gambar!");
			redirect("pesanan");
        } 
        else
        {
			$uploaded_data = $this->upload->data();
            $data = array(
				"id_pelanggan"=>$id,
				"lokasi_awal"=>$lokasi_awal,
				"lokasi_tujuan"=>$lokasi_tujuan,
				"jarak"=>$jarak,
				"harga"=>$harga,
				"pembayaran"=>$pembayaran,
				"bukti"=>$uploaded_data['file_name'],
				"tanggal"=>$tanggal,
				"status"=>"order"
			);

			// var_dump($data);

			$this->db->trans_start();
			$this->db->insert("pesanan",$data);
			$this->db->trans_complete();
			if($this->db->trans_status()===false){
				$this->session->set_flashdata("gagal","pesanan gagal!");
			}else{
				$this->session->set_flashdata("berhasil","pesanan berhasil!");
			}
			redirect("pesanan/list");
        }
	}
	public function list(){
		$data['pesanan']=$this->db->join("tb_user","tb_user.id = pesanan.id_pelanggan")->order_by("tanggal","DESC")->get("pesanan")->result();
		$this->load->view('komponen/header');
		$this->load->view('komponen/nav');
		$this->load->view('list_pesanan',$data);
		$this->load->view('komponen/footer');
		$this->load->view('komponen/script');
	}
}