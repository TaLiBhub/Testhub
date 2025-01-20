<?php

class Router {
    private $router = [];

    public function createRoute($method, $route, $callback) {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException("Callback for route {$route} is not callable.");
        }

        $this->router[] = [
            "method" => $method,
            "route" => $route,
            "callback" => $callback
        ];
    }

    public function request() {
        $reqMethod = $_SERVER["REQUEST_METHOD"];
        $reqUrl = strtok($_SERVER["REQUEST_URI"], "?");

        foreach ($this->router as $route) {
            if ($route["method"] === $reqMethod && $route["route"] === $reqUrl) {
                return call_user_func($route["callback"]);
            }
        }

        $this->jsonResponse(["message" => "route not found"], 404);
    }

    private function jsonResponse($data, $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function listRoutes() {
        return $this->router;
    }
}
