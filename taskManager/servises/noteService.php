<?php

class NoteService {
    private $notes = [];

    public function createNote($note) {
        $this->notes[] = $note;
        file_put_contents('notes.json', json_encode($this->notes));
        return ["message" => "Note Created", "note" => $note];
    }
    
    public function deleteNote($index) {
        if (isset($this->notes[$index])) {
            unset($this->notes[$index]);
            $this->notes = array_values($this->notes);  
            http_response_code(200);
            return $this->jsonResponse("Note Deleted");
        } 
        http_response_code(404);
        return $this->jsonResponse("Note Not Found", [], 404);
    }

    public function getNotes() {
        if (file_exists('notes.json')) {
            $this->notes = json_decode(file_get_contents('notes.json'), true); 
        }
        return $this->notes;
    }

    private function jsonResponse($message, $data = [], $status = 200) {
        return json_encode([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ]);
    }
}




