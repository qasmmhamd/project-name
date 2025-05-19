<?php

function checkFile($path) {
    if (file_exists($path)) {
        echo "✔ موجود: $path\n";
    } else {
        echo "✘ مفقود: $path\n";
    }
}

function checkFolder($path) {
    if (is_dir($path)) {
        echo "✔ موجود: $path\n";
    } else {
        echo "✘ مفقود: $path\n";
    }
}

echo "---- فحص ملفات مشروع Laravel ----\n";

checkFile('app/Providers/RouteServiceProvider.php');
checkFolder('routes');
checkFile('routes/api.php');
checkFile('routes/web.php');
checkFolder('app/Http/Controllers');
checkFile('app/Http/Controllers/Controller.php');
checkFile('app/Http/Controllers/CarController.php');

echo "---- نهاية الفحص ----\n";
