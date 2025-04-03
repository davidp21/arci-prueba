<?php
require_once('Database.class.php');

class Client
{
    public static function create_client($email, $name, $city, $telephone)
    {
        // $database = new Database();
        // $conn = $database->getConnection();

        // $stmt = $conn->prepare('INSERT INTO listado_clientes(email, name, city, telephone)
        //     VALUES(:email, :name, :city, :telephone)');
        // $stmt->bindParam(':email',$email);
        // $stmt->bindParam(':name',$name);
        // $stmt->bindParam(':city',$city);
        // $stmt->bindParam(':telephone',$telephone);

        // if($stmt->execute()){
        //     return 'HTTP/1.1 201 Cliente creado correctamente';
        // } else {
        //     return 'HTTP/1.1 404 Cliente no se ha creado correctamente';
        // }

        $database = new Database();
        $conn = $database->getConnection();

        $stmt = $conn->prepare('INSERT INTO listado_clientes(email, name, city, telephone) VALUES(:email, :name, :city, :telephone)');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':telephone', $telephone);

        if ($stmt->execute()) {
            // return 'HTTP/1.1 201 Cliente creado correctamente';

            $lastId = $conn->lastInsertId(); // Obtener el ID del último registro insertado

            // Obtener los datos del registro insertado
            $stmtSelect = $conn->prepare('SELECT * FROM listado_clientes WHERE id = :id');
            $stmtSelect->bindParam(':id', $lastId);
            $stmtSelect->execute();
            $lastRecord = $stmtSelect->fetch(PDO::FETCH_ASSOC); // Obtener el registro como un array asociativo

            // Devolver los datos del registro insertado
            return json_encode([
                'status' => 'success',
                'message' => 'Cliente creado correctamente',
                'data' => $lastRecord
            ]);
        } else {
            // return 'HTTP/1.1 404 Cliente no se ha creado correctamente';
            return json_encode([
                'status' => 'error',
                'message' => 'Cliente no se ha creado correctamente'
            ]);
        }
    }

    public static function delete_client_by_id($id)
    {
        // $database = new Database();
        // $conn = $database->getConnection();

        // $stmt = $conn->prepare('DELETE FROM listado_clientes WHERE id=:id');
        // $stmt->bindParam(':id', $id);
        // if ($stmt->execute()) {
        //     header('HTTP/1.1 201 Cliente borrad correctamente');
        // } else {
        //     header('HTTP/1.1 404 Cliente no se ha podido borrar correctamente');
        // }

        $database = new Database();
        $conn = $database->getConnection();
    
        // Verificar si el cliente existe
        $stmtSelect = $conn->prepare('SELECT * FROM listado_clientes WHERE id = :id');
        $stmtSelect->bindParam(':id', $id);
    
        if ($stmtSelect->execute()) {
            if ($stmtSelect->rowCount() > 0) {
                // El cliente existe, proceder con la eliminación
                $stmtDelete = $conn->prepare('DELETE FROM listado_clientes WHERE id = :id');
                $stmtDelete->bindParam(':id', $id);
    
                if ($stmtDelete->execute()) {
                    // Eliminación exitosa
                    return ['status' => 'success', 'message' => 'Cliente borrado correctamente'];
                } else {
                    // Error al eliminar el cliente
                    return ['status' => 'error', 'message' => 'Error al borrar el cliente'];
                }
            } else {
                // Cliente no encontrado
                return ['status' => 'error', 'message' => 'Cliente no encontrado'];
            }
        } else {
            // Error en la consulta SELECT
            return ['status' => 'error', 'message' => 'Error al verificar la existencia del cliente'];
        }
    }

    
    public static function get_all_clients()
    {
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('SELECT * FROM listado_clientes');
        
        if ($stmt->execute()) {

            $lastRecord = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener el registro como un array asociativo

            // Devolver los datos del registro insertado
            return json_encode([
                'status' => 'success',
                'message' => 'Lista de clientes',
                'data' => $lastRecord
            ]);

            // $result = $stmt->fetchAll();
            // echo json_encode($result);
            // header('HTTP/1.1 201 OK');
        } else {
            // header('HTTP/1.1 404 No se ha podido consultar los clientes');
        }
    }

    public static function get_all_categories() {
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('SELECT * FROM categorias');
        
        if ($stmt->execute()) {

            $lastRecord = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener el registro como un array asociativo

            // Devolver los datos del registro insertado
            return json_encode([
                'status' => 'success',
                'message' => 'Lista de categorias',
                'data' => $lastRecord
            ]);

            // $result = $stmt->fetchAll();
            // echo json_encode($result);
            // header('HTTP/1.1 201 OK');
        } else {
            // header('HTTP/1.1 404 No se ha podido consultar los clientes');
        }
    }

    public static function update_client($id, $email, $name, $city, $telephone)
    {
        $database = new Database();
        $conn = $database->getConnection();

        $stmt = $conn->prepare('UPDATE listado_clientes SET email=:email, name=:name, city=:city, telephone=:telephone WHERE id=:id');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            header('HTTP/1.1 201 Cliente actualizado correctamente');
        } else {
            header('HTTP/1.1 404 Cliente no se ha podido actualizar correctamente');
        }
    }
}
