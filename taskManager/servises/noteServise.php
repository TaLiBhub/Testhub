<?php

class NoteService {
    private $notes = [];

    public function createNote($note) {
        $this->notes[] = $note;
        return ["message" => "Note Create" , "note" => $note];
    }

    public function deleteNote($index) {
        if(isset($this->notes[$index])) {
            unset($this->notes[$index]);
            return ["massage" => "Delete Complited"];
        } 
        return ["massage" => "Note Not Found"];
    }

    public function getNotes() {
        return $this->notes;
    }

}




