<?php
$_SESSION = [];
session_unset();
session_destroy();

echo "
		<script>
			document.location.href = '" . BASEURL . "';
		</script>
	";
exit;
