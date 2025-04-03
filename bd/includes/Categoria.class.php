<?php
require_once('Database.class.php'); // Asegúrate de que la ruta sea correcta

class Categoria {
    public static function obtenerCategorias($codigo_cat = null, $nombre_cat = null) {
        $database = new Database();
        $conn = $database->getConnection();

        $sql = 'SELECT * FROM categorias WHERE 1=1'; // Inicializar la consulta base

        $params = []; // Array para almacenar los parámetros

        // Agregar condiciones según los parámetros recibidos
        if ($codigo_cat !== null) {
            $sql .= ' AND cCodigo_cat = :codigo_cat';
            $params[':codigo_cat'] = $codigo_cat;
        }

        if ($nombre_cat !== null) {
            $sql .= ' AND cNombre_cat LIKE :nombre_cat';
            $params[':nombre_cat'] = '%' . $nombre_cat . '%'; // Usar LIKE para buscar coincidencias parciales
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>