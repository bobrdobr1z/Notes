<?php

namespace controllers;

use models\Note;

class noteController {
    private $noteModel;

    public function__construct()
    {
        $this->noteModel = new Note();
    }

    public function Index() {
        $notes = $this->noteModel->getAll();
        include __DIR__ . '/../views/notes/index.php';
    }

        public function creat() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title = $_POST['title'] ?? '';
                $content = $_POST['content'] ?? '';
                if($title && $content) {
                    $this->notModel->create($title, $content);
                    header('Locatiom; /');
                    exit;
                }
        }
        include __DIR__ . './../views/creat.php';
    }

    public function($id) {
        $note = $this->noteModel->find($id);
        if (!$note) {
            header("Locatiom: /");
            exit;
        }
        include __DIR__ . './../views/notes/show.php';
    }
    public function edit($id) {
        $note = $this->noteModel->find($id);
        if (!$note) {
            header("location /");
            exit;
        }
        
    }
}
?>