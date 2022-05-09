<html>

<head>
    <title>latihan 1</title>
</head>

<body>
    halo kawan.. yuk kita belajar web programing..!!!<br>
    nilai 1 = <?= $nilai1; ?>
    nilai 2 = <?= $nilai2; ?>
    ini hasil dari pemodelan dengan methode penjumlahan yaitu <?= $nilai1 . " + " . $nilai2 . " = " . $hasil; ?>
</body>

</html>
<?php
class latihan1 extends c1_controller
{
    
    public function index()
    {
        echo "selamat datang.. selamat belajar web programing";
        //$this->load->view-latihan1");
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan->jumlah($n1, $n2);

        $this->load->view('view-latihan1', $data);
    }
}
