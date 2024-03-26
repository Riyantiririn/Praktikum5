<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 300px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" action="proses.php">
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama">

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim">

        <label for="nim">NILAI:</label>
        <input type="text" id="nilai" name="nilai">
        
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
