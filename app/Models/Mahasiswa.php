<?php namespace App\Models;

class Mahasiswa extends BaseModel {

    public function select($table, $id='') {
        if(isset($id)) {
            return $this->db->table($table)
                ->where($id)
                ->get()->getRowArray();
        } else {
            return $this->db->table($table)
                ->get()->getResultArray();
        }
    }

    /* public function insert($table, $data) {
        return $this->db->table($table)
            ->insert($data);
    } */

    /* public function update($table, $data, $id) {
        return $this->db->table($table)
            ->update($data, $id);
    } */

    /* public function delete($table, $id) {
        return $this->db->table($table)
            ->delete($id);
    } */
}