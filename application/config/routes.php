<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['tampilMakanan'] = 'con_makanan/tampil';
$route['otoID'] = 'con_makanan/otoID';
$route['gethapusMakanan/(:any)'] = 'con_makanan/gethapusMakanan/$1';
$route['hapusMakanan/(:any)'] = 'con_makanan/hapusMakanan/$1';// rute awal
$route['getEdit/(:any)'] = 'con_makanan/getEdit/$1';

$route['upload_gambar']='con_makanan/uploadGambar';
$route['inputMakanan'] = 'con_makanan/input';

$route['tampilKategori'] = 'con_kategori/tampil';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
