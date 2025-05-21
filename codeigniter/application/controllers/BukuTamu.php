<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuTamu extends CI_Controller
{

    public function index()
    {
        $this->load->view('index');
    }

    public function export_csv()
    {
        $this->load->model('Buku_tamu_model');
        $this->load->dbutil();

        $query = $this->Buku_tamu_model->get_all_messages();

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="pesan_tamu.csv"');

        $output = fopen('php://output', 'w');

        fputcsv($output, ['Nama', 'Email', 'Pesan', 'Tanggal']);

        foreach ($query as $row) {
            fputcsv($output, [$row->nama, $row->email, $row->pesan, $row->created_at]);
        }

        fclose($output);
        exit;
    }


    public function admin()
    {
        $this->load->model('Buku_tamu_model');
        $data['messages'] = $this->Buku_tamu_model->get_all();
        $this->load->view('admin', $data);
    }
}
