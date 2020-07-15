<?php namespace App\Libraries;

class StyleScript {

    protected $uri;

    public function __construct() {
        $this->uri = \Config\Services::uri();
    }

    public function style() {
        switch ($this->uri->getSegment(1)) {
            case 'mahasiswa':
                return '<!-- DataTables -->
                <link rel="stylesheet" href="'.base_url("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css").'">
                <link rel="stylesheet" href="'.base_url("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css").'">';
                break;
            
            default:
                break;
        }
    }    

    public function script() {
        switch ($this->uri->getSegment(1)) {
            case 'mahasiswa':
                return '<!-- DataTables -->
                <script src="'.base_url("assets/plugins/datatables/jquery.dataTables.min.js").'"></script>
                <script src="'.base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js").'"></script>
                <script src="'.base_url("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js").'"></script>
                <script src="'.base_url("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js").'"></script>
                <!-- bs-custom-file-input -->
                <script src="'.base_url("assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js").'"></script>
                <script src="'.base_url("assets/dist/js/forMahasiswa.js").'"></script>';
                break;
            
            default:
                break;
        }
    }
}
