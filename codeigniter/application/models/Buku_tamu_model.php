
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_tamu_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_message($nama, $email, $pesan)
    {
        $this->db->insert('messages', [
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function get_all()
    {
        return $this->db->order_by('created_at', 'DESC')->get('messages')->result();
    }

    public function get_all_messages()
    {
        return $this->db->get('messages')->result();
    }
}
