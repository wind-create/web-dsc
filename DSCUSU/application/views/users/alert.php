<?php if($this->session->flashdata('status') == "Invalid"): ?>
<script>
    $(document).ready(function(){
      $("#onphpidRegister").modal("show");
    });
</script>

<?php elseif($this->session->flashdata('status') == "Error"): ?>
<script>
    $(document).ready(function(){
      $("#onphpidLogin").modal("show");
    });
</script>

<?php elseif($this->session->flashdata('passChanged') == TRUE ): ?>
<script> alert('Password berhasil diubah. Silahkan login kembali');
    $(document).ready(function(){
      $("#onphpidLogin").modal("show");
    });
</script>

<?php elseif($this->session->flashdata('status') == "Login" ): ?>
    <script> 
      alert('Anda berhasil Login.'); 
    </script>

<?php elseif($this->session->flashdata('status') == "failVerify" ): ?>
    <script> 
      alert('Maaf, Sepertinya akun anda belum diverifikasi. Silahkan verifikasi lalu Login kembali.'); 
    </script>

<?php elseif($this->session->flashdata('status') == "regSuccess" ): ?>
    <script> 
      alert('Akun Anda sudah didaftar. Silahkan buka E-Mail Anda untuk verifikasi. Terima kasih.'); 
    </script>

<?php elseif($this->session->flashdata('status') == "regFailed" ): ?>
    <script> 
      alert('Maaf, Sepertinya terjadi kesalahan saat pengiriman E-Mail.'); 
    </script>

<?php endif; ?>