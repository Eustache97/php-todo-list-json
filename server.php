<?php
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

// Se nel post c'è la chiave newToDo
if (isset($_POST["newToDo"])) {
    // Salvataggio del nuovo dato
    $new_todo = $_POST["newToDo"];
    $newToDo = [
        "text" => $new_todo,
        "done" => false
    ];
    $todos[] = $newToDo;
    // Scrittura nel file
    file_put_contents("todo.json", json_encode($todos));
    //Gestione toggle toDO
} elseif(isset($_POST["toggleIndex"])){
    $toDoIndex = $_POST["toggleIndex"];
    $todos[$toDoIndex]["done"] = !$todos[$toDoIndex]["done"];
    file_put_contents("todo.json", json_encode($todos));

} elseif(isset($_POST["deleteIndex"])) {
    // Cancellazione di un toDo
    $toDoIndex = $_POST["deleteIndex"];
    array_splice($todos, $toDoIndex, 1);
    file_put_contents("todo.json", json_encode($todos));
}
// Invio dei dati
header("Content-Type: application/json");
echo json_encode($todos);


