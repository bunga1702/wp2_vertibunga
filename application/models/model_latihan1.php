<?php
class model_latihan1 extends CI_model
{
    //membuat variable untuk menampung nilai 
    public $nilai, $nilai, $hasil;
}
    //methot penjumlahan 
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasuil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
<?php
class latihan1 extends CI_controller
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web programing";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "hasil penjumlahan dari". $n1 ." + ". $n2 ." = " .$hasil;
    }
}