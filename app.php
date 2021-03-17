<?php

include ("controllers/controller.php");

function method($method) {
    return $_SERVER["REQUEST_METHOD"] == $method;
}

function route($route) {
    if (isset($_SERVER["PATH_INFO"])) {
        $route = explode("/", $route);

        $pathInfo = $_SERVER["PATH_INFO"];
        
        $pathInfo = explode("/", $pathInfo = substr($pathInfo, 1, strlen($pathInfo)));
        
        $params = array();

        if (count($route) != count($pathInfo)) {
            return null;
        }

        for ($i = 1; $i < count($pathInfo); $i++) {
            $paramName = substr($route[$i], 1, strlen($route[$i]));
            array_push($params, array($paramName=>$pathInfo[$i]));
        }

        $_SERVER["PARAMS"] = $params;
        return $route[0] == $pathInfo[0];
    }
    return null;
}

function params($quantity) {
    return length(json_encode(explode("/", substr($_SERVER["PATH_INFO"], 1))));
}

function testOutput() {
    echo $_SERVER["PATH_INFO"];
}

if (method("POST") && route("container")) {
    testOutput();
} else if (method("GET") && route("container/:id")) { // lekérés mindig get
    testOutput();
} else if (method("DELETE") && route("container/:id")) {
    testOutput();
} else if (method("POST") && route("files/tray/:id")) // EZT MÉG JAVÍTANI KELL, MERT A function NEM KEZELI A TÖBBÁGÚ FÁJLRENDSZERT - (NODEJS KÉNE - route miatt)
    testOutput();
} else if (method("DELETE") && route("container/file/:id")) {
    testOutput();
}

?>