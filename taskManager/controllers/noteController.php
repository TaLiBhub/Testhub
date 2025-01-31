<?php

require_once "servises/noteService";

class NoteController {
    private $noteService;

    public function __construct() {
        $this->noteService = new NoteService();
    }

    public function createNote() {
        $input = json_decode(file_get_contents("php://input"), true);
        $note = $input["note"] ?? null;
    
        if ($note) {
            $response = $this->noteService->createNote($note);
            http_response_code(200);
            echo json_encode([
                "status" => 200,
                "message" => "Note Created",
                "data" => $response
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                "status" => 400,
                "message" => "Invalid Note"
            ]);
        }
    }
    
       
    public function deleteNote() {
        $input = json_decode(file_get_contents("php://input"), true);

        if (isset($input["index"])) {
            $index = $input["index"];
            http_response_code(200);
            echo json_encode($this->noteService->deleteNote($index));
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Index not provided for deletion"]);
        }
    }

   
    public function getNotes() {
        $notes = $this->noteService->getNotes(); 
        http_response_code(200);
        echo json_encode([
            "status" => 200,
            "message" => "All notes",
            "data" => $notes
        ]);
    }
    
    

  }