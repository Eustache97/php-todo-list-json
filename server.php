<?php
$todos = ["HTML", "CSS", "Responsive design", "JavaScript", "PHP", "Laravel"];

// Se nel post c'è la chiave newToDo
if (isset($_POST["newToDo"])) {
    // Salvataggio del nuovo dato
    $new_todo = $_POST["newToDo"];
    $todos[] = $new_todo;
    // Scrittura nel file
    file_put_contents("todo.json", json_encode($todos));
}
// Invio dei dati
header("Content-Type: application/json");
echo json_encode($todos);


