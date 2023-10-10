<?php
	session_start();

    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );

	session_destroy(); 
?>

ออกจากระบบแล้ว<br>
หากต้องการเข้าสู่ระบบอีกครั้งโปรดคลิ๊ก
<a href='formlogin.php'>เข้าสู่ระบบ</a>