<?php

if (!function_exists('formatIndonesia')) {
    function formatIndonesia($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $potongan_tanggal = explode('-', $tanggal);

        return $potongan_tanggal[2] . ' ' . $bulan[(int)$potongan_tanggal[1]] . ' ' . $potongan_tanggal[0];
    }
}
