<?php

    const DB_HOST = "localhost";
    const DB_DB = "curso";
    const DB_USER = "root";
    const DB_PASS = "";
    $connPDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DB, DB_USER, DB_PASS);
    error_reporting(E_ERROR);

    const ROOTFOLDER = "conectarbd";
