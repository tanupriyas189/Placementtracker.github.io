<?php

session_start();
session_destroy();
?>
<script>
    alert("Logged out successfully ");
   location.replace("homepage.php");
</script>

<?php

  
?>