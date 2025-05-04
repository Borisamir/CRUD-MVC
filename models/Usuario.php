<?php

require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = Database::conectar();
    }

    public function all() {
        $stmt = $this->conexion->query("SELECT * FROM alumno");
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }

    public function find($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM alumno WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nombre, $apellido) {
        $stmt = $this->conexion->prepare("UPDATE alumno SET nombre = ?, apellido = ? WHERE id = ?");
        return $stmt->execute([$nombre, $apellido, $id]);
    }

    public function delete($id) {
        $stmt = $this->conexion->prepare("DELETE FROM alumno WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function store($id, $nombre, $apellido) {
        $query = "INSERT INTO alumno (id, nombre, apellido) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        return $stmt->execute([$id, $nombre, $apellido]);
    }
}
