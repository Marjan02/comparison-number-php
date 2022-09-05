<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-green-200 py-32 px-10 min-h-screen ">

        <?php
        error_reporting(E_ALL && ~E_NOTICE);
        $pertama =  $_POST["pertama"];
        $kedua =  $_POST["kedua"];
        if (isset($_POST['submit'])) {
            if ($pertama == $kedua) {
                echo '<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto mb-10">';
                echo '<div class="text-6xl text-center">==</div>';
                echo '<p class="text-center font-bold text-gray-600">';
                echo 'Nilai ' . $pertama . ' Sama Dengan ' . $kedua;
                echo '</p>';
                echo '</div>';
            } elseif ($pertama > $kedua) {
                echo '<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto mb-10">';
                echo '<div class="text-6xl text-center">></div>';
                echo '<p class="text-center font-bold text-gray-600">';
                echo 'Nilai ' . $pertama . ' Lebih Besar ' . $kedua;
                echo '</p>';
                echo '</div>';
            } else {
                echo '<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto mb-10">';
                echo '<div class="text-6xl text-center"><</div>';
                echo '<p class="text-center font-bold text-gray-600">';
                echo 'Nilai ' . $pertama . ' Lebih kecil ' . $kedua;
                echo '</p>';
                echo '</div>';
            }
        } else {
        };
        ?>
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

            <form method="POST" action="">
                <h1 class="text-center text-lg font-bold mb-6 text-gray-600">
                    Perbandingan
                </h1>
                <div class="flex items-center mb-5">
                    <label class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Pertama</label>
                    <input required name="pertama" type="number" placeholder="Masukan angka" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400">
                </div>

                <div class="flex items-center mb-10">
                    <label class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Kedua</label>
                    <input required name="kedua" type="number" placeholder="Masukan angka" class="flex-1 py-2 border-b-2 border-gray-400 text-gray-600 placeholder-gray-400">
                </div>

                <div class="text-right">
                    <input name="submit" value="submit" type="submit" class="py-3 px-8 bg-green-400 text-white font-bold">
                </div>
            </form>
        </div>
    </div>
</body>

</html>