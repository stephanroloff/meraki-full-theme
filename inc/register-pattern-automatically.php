<?php
function registrar_patrones_desde_archivos() {
    $ruta_patrones = get_template_directory() . '/patterns/';
    $archivos = glob($ruta_patrones . '*.json');

    foreach ($archivos as $archivo) {
        $contenido = json_decode(file_get_contents($archivo), true);
        if (!empty($contenido['title']) && !empty($contenido['content'])) {
            register_block_pattern(
                'mi-tema/' . sanitize_title($contenido['title']),
                array(
                    'title'       => __( $contenido['title'], 'mi-tema' ),
                    'description' => isset($contenido['description']) ? __( $contenido['description'], 'mi-tema' ) : '',
                    'categories'  => isset($contenido['categories']) ? $contenido['categories'] : array(),
                    'content'     => $contenido['content'],
                )
            );
        }
    }
}
add_action('init', 'registrar_patrones_desde_archivos');