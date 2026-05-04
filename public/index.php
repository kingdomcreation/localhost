<?php define("PHP_", "../php/");
include PHP_ . "functions.php";

$index = $data["url"] = slug();

if ("logout" == $index) {
    // Destroy session & redirect
    header("Location: /");
}
$pages = [
    "about" => "About Us",
    "contact" => "Contact Form",
    "contact/new" => "New Message",
    "contact/form" => "New Message",
    "index" => "Project name",
];

if (isset($_GET["p"]) && isset($pages[$_GET["p"]])) {
    $index = $_GET["p"];
} else {
    $index = empty($index) ? "index" : $index;
}
$title = $data["title"] = $pages[$index];

if (isset($_POST["action"])) {
    $action = isset($pages[$index . "/" . $_POST["action"]]) ? $_POST["action"] : false;
}

if (isset($action)) {
    $form = include PHP_ . "web/". $index . "-handler.php";
    if (is_array($form)) {
        $data = array_merge($data, $form);
    }
}

if (isset($_GET["json"])) {
    index($data, false);
    echo json($data);
} elseif (isset($_GET["ajax"])) {
    $data["ajax"] = true;
    echo index($data, false);
} else {
    index($data);
}
