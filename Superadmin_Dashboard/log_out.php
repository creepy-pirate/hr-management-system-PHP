<?php
	session_start();
	session_destroy();
    echo "<Script type = 'text/javascript'>alert('Successfully Logout!');document.location = '../index.html'</script>";