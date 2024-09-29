<?php
session_start();
session_destroy();
echo"
    <script>
    alert('berhasil logout')
    window.location.href = 'login.php'
    </script>

";

?>