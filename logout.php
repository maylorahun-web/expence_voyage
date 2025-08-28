<?php
session_start();
session_unset();
session_destroy();
?>
<script>
localStorage.removeItem('isLoggedIn');
window.location.href = 'index.php';
</script>