<script src="<?php echo base_url("//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js") ?>"></script>

<script src="<?php echo base_url('assets/summernote/summernote.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#subs').submit(function(e){
            e.preventDefault(); 
            $.ajax({
               url:'<?php echo base_url();?>index.php/upload/do_upload',
               type:"post",
               data:new FormData(this),
               processData:false,
               contentType:false,
               cache:false,
               async:false,
               success: function(data){
                  alert("Upload Image Berhasil.");
              }
          });
        });
        

    });
    
</script>
</body>
</html>