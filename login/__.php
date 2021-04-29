<?php

$users = [
    ['name' => 'Antanas', 'psw' => md5('123'), 'color' => 'blue'],
    ['name' => 'Ona', 'psw' => md5('12'), 'color' => 'pink'],
    ['name' => 'Bebras', 'psw' => md5('1'), 'color' => 'brown']
];

file_put_contents(__DIR__.'/users.json', json_encode($users));