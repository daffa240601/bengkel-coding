<?php
    $nama = "Bengkel Koding";
    if(isset($nama)){
        print("Nama telah diatur");
    } else {
        print("Nama belum diatur")
    }
    // output : Nama telah diatur
    $nama = "";
    if(empty($nama)) {
        print("nama kosong");
    } else {
        print("nama tidak kosong");
    }
    // output : Nama kosong
?>