<?php
class Jurusan
{
    private $conn;
    private $table = "jurusan";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // READ
    public function getAll()
    {
        return $this->conn->query("SELECT * FROM $this->table");
    }

    public function getJurusanById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // CREATE
    public function store($data)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO $this->table(kode_jurusan, nama_jurusan) VALUES (?, ?)"
        );
        $stmt->bind_param("ss", $data['kode'], $data['nama']);

        if ($stmt->execute()) {
            return ['status' => true, 'message' => 'Data berhasil ditambahkan'];
        }

        return ['status' => false, 'message' => 'Data gagal ditambahkan'];
    }

    // UPDATE
    public function update($id, $data)
    {
        $stmt = $this->conn->prepare(
            "UPDATE $this->table SET kode_jurusan = ?, nama_jurusan = ? WHERE id = ?"
        );
        $stmt->bind_param("ssi", $data['kode'], $data['nama'], $id);

        if ($stmt->execute()) {
            return ['status' => true, 'message' => 'Data berhasil diupdate'];
        }

        return ['status' => false, 'message' => 'Data gagal diupdate'];
    }

    // DELETE
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return ['status' => true, 'message' => 'Data berhasil dihapus'];
        }

        return ['status' => false, 'message' => 'Data gagal dihapus'];
    }
}
?>
