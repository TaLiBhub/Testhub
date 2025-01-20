<?php

require_once "routes/router.php";
require_once "controllers/noteController.php";

$router = new Router();
$controller = new NoteController();

$router->createRoute("GET", "/getNotes", [$controller, "getNotes"]);
$router->createRoute("POST", "/createNotes", [$controller, "createNote"]);
$router->createRoute("DELETE", "/deleteNotes", [$controller, "deleteNote"]);

$router->request();