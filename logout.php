<?php 
session_start();
session_destroy();
?>
<script type="text/javascript">
    alert('Congratulations, you have successfully logged out.');
    location.href = "login.php";
</script>