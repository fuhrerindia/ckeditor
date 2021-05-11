<?php
    function ckeditor($name){
        ?><script>
            CKEDITOR.replace('<?php echo $name; ?>');
        </script><?php
    }
?>