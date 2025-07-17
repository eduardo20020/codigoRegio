<?php
$articulosDir = __DIR__;
$archivos = glob($articulosDir . '/*.html');

// Excluir archivos tipo legal si es necesario
$archivos = array_filter($archivos, function($f) {
    return strpos($f, 'legal') === false;
});

function formateaNombre($archivo) {
    $nombre = basename($archivo, '.html');
    $nombre = str_replace('-', ' ', $nombre);
    $nombre = ucwords($nombre);
    return $nombre;
}

// Descripción automática básica leyendo las primeras líneas del HTML
function obtenerDescripcion($archivo) {
    $contenido = file_get_contents($archivo);
    if (preg_match('/<p[^>]*>(.*?)<\/p>/', $contenido, $matches)) {
        return strip_tags($matches[1]);
    }
    return "Artículo sobre " . formateaNombre($archivo) . ".";
}

function obtenerFecha($archivo) {
    return date('d M Y', filemtime($archivo));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5298299662458918"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Todos los Artículos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-100 min-h-screen font-sans">
    <div class="max-w-6xl mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold gradient-text mb-10 text-center">Todos los Artículos</h1>
        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach($archivos as $archivo): ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition group flex flex-col">
                    <div class="h-36 bg-gradient-to-r from-blue-100 to-purple-100 flex items-center justify-center">
                        <i class="fas fa-book-open text-5xl text-blue-500 group-hover:text-purple-700 transition"></i>
                    </div>
                    <div class="flex flex-col flex-1 p-6">
                        <div class="flex items-center justify-between text-xs text-gray-400 mb-2">
                            <span><?= obtenerFecha($archivo) ?></span>
                        </div>
                        <a href="<?= basename($archivo) ?>" class="text-2xl font-semibold text-blue-700 group-hover:text-purple-700 transition mb-2 hover:underline">
                            <?= formateaNombre($archivo) ?>
                        </a>
                        <div class="text-gray-600 flex-1 mb-6"><?= obtenerDescripcion($archivo) ?></div>
                        <a href="<?= basename($archivo) ?>" class="inline-block mt-auto text-blue-600 hover:text-purple-700 font-medium group-hover:underline transition">
                            Leer artículo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mt-12 text-center">
            <a href="/" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-semibold">
                &larr; Volver al inicio
            </a>
        </div>
    </div>
    <style>
      .gradient-text {
        background: linear-gradient(45deg, #3b82f6, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>