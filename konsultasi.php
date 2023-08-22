<?php
$namalengkap=$_POST['namalengkap'];
$pertanyaan=$_POST['pertanyaan'];
echo 
"
<script>
window.location='https://wa.me/6289603234372?text=Hallo,%20Perkenalkan%20Nama%20Saya%20$namalengkap%0ASaya%20Ingin%20Konsultasi%20dengan%20Pertanyaan%20Berikut%0A$pertanyaan';
</script>
";

?>