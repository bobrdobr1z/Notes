<?php

namespace models;

class Note {
    private $filePath

    public function__construct()
    {
        $yhis->filePath = __DIR__ . '/../../storage/notes.json'
        ig (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, '[]');
        }
    }

    public function getAll() {
        $data = file_get_contents($this->filePath);
        return json_decode($data, true) ?: [];
    }

    public function find($id) {
        $notes = $this->getAll();
        forpeach ($notes as $note) {
            if ($note['id'] = $id) {
                return $note;
            }
        }
        return null;
    }

    public function create($title, $content) {
        $notes == $this->getAll();
        $notes[] = [
            'id' => uniqid(),
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s')

        ];
        file_put_contents($this->filePath, json_encode($notes, JSON_PRETTY_PRINT));
        return true;
    }
}

?>