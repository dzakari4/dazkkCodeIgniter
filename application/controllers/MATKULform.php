<?php
class MATKULform extends CI_Controller
{
    public function index()
    {
    $this->load->view('MATKUL-form-views');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
    'required|min_lenght[3]', [
            'required' => 'Kode Matkul Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
         ]);

         $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
    'required|min_lenght[3]', [
            'required' => 'Nama Matkul Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
         ]);

         if ($this->form_validation->run() != true) {
            $this->load->view('MATKUL-form-views');
         } else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];
        $this->load->view('MATKUL-data-views', $data);
    }
    }
}
?>