<?php
class Model_latihan1 extends CI_Model
{
    //method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $hasil = $n1 + $n2;
        return $hasil;
    }
}
?>
