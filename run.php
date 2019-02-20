<?php
require_once 'init_surfee.php';
//config
//isi code auth token
$auth='eyJhbGciOiJIUzI1NiJ9.eyJpZCI6MTIyMzI4LCJleHAiOjE3MDg0MTE2NzQsImlhdCI6MTU1MDY0NTI3NH0.m56kB8QJP83u4wrGGRB2eeQvTfPEPOQeDLlypnpivno';
//isi xxxx dgn benar
$gps='latitude=-6.8342625&longitude=106.7596106';


//run bot
survey($auth,$gps);
