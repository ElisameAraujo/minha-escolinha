<?php

/** == Lista de todas as rotas da aplicação == **/
$admin = 'routes/admin/';
$web = 'routes/web/';

/** === Autenticação === **/
require base_path('routes/auth/auth.php');

/** === Web === **/

/** === Administração === **/
require base_path($admin.'dashboard/dashboardRotas.php');
require base_path($admin.'atletas/atletasRotas.php');