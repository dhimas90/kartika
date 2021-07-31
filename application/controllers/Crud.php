<?php 
class Crud extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->helper('form', 'url');
        $this->load->library('form_validation', 'session');
    }
    

    public function index() 
    {
        $data['judul'] = 'Kartika';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        
        $data['rows'] = $this->Crud_model->getData();
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }
    
    public function add()
    {
        $this->form_validation->set_rules('id_number', 'Nomor ID', 'required');
        $this->form_validation->set_rules('date', 'Tanggal', 'required');
        $this->form_validation->set_rules('aklim', 'Aklim', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah');
        
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Kartika';
            $data['notif'] = '<div class="alert alert-success alert-dismissible col-lg-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?>
                              </div>';
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $data['rows'] = $this->Crud_model->getData();
            $this->load->view('index', $data);
            $this->load->view('template/footer');
        } else {
            $id_number = $this->input->post('id_number');
            $date = $this->input->post('date');
            $aklim = $this->input->post('aklim');
            $jumlah = $this->input->post('jumlah');

            $data = array (
                'id_number' => $id_number,
                'date' => $date,
                'aklim' => $aklim,
                'jumlah' => $jumlah
            );
            $this->Crud_model->inputThis($data, 'test');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible col-lg-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data berhasil ditambahkan.
          </div>');
            redirect('Crud/index');
        }
    }

    public function edit($id) 
    {
        $where = array('id' => $id);
        $data['edit'] = $this->Crud_model->getId($where, 'test')->result_array();
        $data['judul'] = 'Ubah Data';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }

    public function update() 
    {

        // copy from add
        $this->form_validation->set_rules('id_number', 'Nomor ID', 'required');
        $this->form_validation->set_rules('date', 'Tanggal', 'required');
        $this->form_validation->set_rules('aklim', 'Aklim', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah');
        
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Kartika';
            $data['notif'] = '<div class="alert alert-success alert-dismissible col-lg-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?>
                              </div>';
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $data['rows'] = $this->Crud_model->getData();
            $this->load->view('index', $data);
            $this->load->view('template/footer');
        } else {
            $id = $this->input->post('id');
            $id_number = $this->input->post('id_number');
            $date = $this->input->post('date');
            $aklim = $this->input->post('aklim');
            $jumlah = $this->input->post('jumlah');

            $data = array (
                'id' => $id,
                'id_number' => $id_number,
                'date' => $date,
                'aklim' => $aklim,
                'jumlah' => $jumlah

            );

            $where = array ( 'id' => $id);
            $this->Crud_model->update_data($where, $data, 'test');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible col-lg-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data berhasil diubah.
          </div>');
            redirect('Crud/index');
        }
    }

    public function delete()
    {
        
    }


}
