<?php
//������ �����Ѵ�.
    session_start();
    session_destroy();
?>
<!--���� ����(�α׾ƿ�) �� logout success �޼����� ���� ���� ȭ������ ���ư���.-->
    <script>
        alert("logout success")
        location.href = "home.php";
    </script>
