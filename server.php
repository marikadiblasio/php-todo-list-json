<?php 
$items = file_get_contents('./data.json');
$phpItems = json_decode($items, true);
if(isset($_POST['item'])){
    $item = $_POST['item'];
    $completed = $_POST['completed'];
    $newItem = [
        'item' => $item,
        'completed' => filter_var($completed, FILTER_VALIDATE_BOOLEAN)
    ];
    array_push($phpItems, $newItem);
    file_put_contents('./data.json', json_encode($phpItems));
}
if(isset($_POST['completed']) && (isset($_POST['index']))) {
    $completed = $_POST['completed'];
    $index = $_POST['index'];
    $phpItems[$index]['completed'] = filter_var($completed, FILTER_VALIDATE_BOOLEAN);
    file_put_contents('./data.json', json_encode($phpItems));
}
header('Content-Type: application/json');
echo json_encode($phpItems);
