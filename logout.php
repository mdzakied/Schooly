<!-- Logout -->
<?php
	// Destroy the session.
	session_start();

	session_destroy();
?>

<script language="JavaScript">
	document.location='login.php';			
</script>