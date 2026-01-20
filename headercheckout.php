<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header dengan Gambar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header-image {
            width: 100%;
            aspect-ratio: 17 / 1;
            overflow: hidden;
            position: relative;
        }

        .header-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    <header class="header-image">
        <!-- Ganti URL di bawah dengan URL gambar Anda -->
        <img src="imgheader.jpg" alt="Header Image">
    </header>

    