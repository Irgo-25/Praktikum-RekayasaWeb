<?php
// Tugas Decode praktikum 1

$data = '[
    {
        "nama": "Irgo Satya Gemiwang",
        "umur": 21,
        "fakultas": "FTIK",
        "gender": "Laki - Laki",
        "semester": 5
    },
    {
        "nama":"Aminuddin",
        "umur": 21,
        "fakultas": "FTIK",
        "gender": "Laki - Laki",
        "semester": 5
    },
    {
        "nama":"Maulana Malik Ibrahim",
        "umur": 21,
        "fakultas": "FTIK",
        "gender": "Laki - Laki",
        "semester": 5
    },
    {
        "nama": "Aditya",
        "umur": 21,
        "fakultas": "FTIK",
        "gender": "Laki - Laki",
        "semester": 5
    }
]';

// Decode Menggunakan php object
$results = json_decode($data);
echo "Daftar Manusia di Bumi :" ."<br><hr>";
foreach ($results as $result) {
    echo "Nama : " .$result->nama ."<br>";
    echo "Umur : " .$result->umur ."<br>";
    echo "Fakultas : " .$result->fakultas ."<br>";
    echo "Gender : " .$result->gender ."<br>";
    echo "Semester : " .$result->semester ."<br>";
    echo "<hr>";
}
$results = json_decode($data, true);
echo "Daftar Manusia di Bumi :" ."<br><hr>";
foreach ($results as $result) {
    echo "Nama : " .$result["nama"] ."<br>";
    echo "Umur : " .$result["umur"] ."<br>";
    echo "Fakultas : " .$result["fakultas"] ."<br>";
    echo "Gender : " .$result["gender"] ."<br>";
    echo "Semester : " .$result["semester"] ."<br>";
    echo "<hr>";
}