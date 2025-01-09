<?php

$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];

$currentUser = 'X';
$gameStatus = true;

function showBoard($board) {
    foreach ($board as $row) {
        echo implode('|', $row) . PHP_EOL;
    }
    echo PHP_EOL;
}

function checkWinner($board, $user) {
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $user && $board[$i][1] === $user && $board[$i][2] === $user) {
            return true;
        }
        if ($board[0][$i] === $user && $board[1][$i] === $user && $board[2][$i] === $user) {
            return true;
        }
    }
    if ($board[0][0] === $user && $board[1][1] === $user && $board[2][2] === $user) {
        return true;
    }
    if ($board[2][2] === $user && $board[1][1] === $user && $board[0][0] === $user) {
        return true;
    }
    return false;

}

function checkDraw($board) {
    foreach ($board as $element) {
        if (in_array('-', $element)) {
            return false;
        }
    }
    return true;
}

function move(&$board, $user) {
    echo "$user Сделайте ход, по координтам: ";
    $input = trim(fgets(STDIN));
    [$x, $y] = explode(".", $input);
    if (isset($board[$x][$y]) && $board[$x][$y] === "-") {
        $board[$x][$y] = $user;
        showBoard($board);
    }else {
        echo "Неверный ход" . PHP_EOL;
        move($board, $user); 
    }
}
while($gameStatus) {
    showBoard($board);
    move($board, $currentUser);
    if (checkWinner($board, $currentUser)) {
        showBoard($board);
        echo "$currentUser Winner" . PHP_EOL;
        $gameStatus = false;
    }elseif (checkDraw($board)) {
        showBoard($board);
        echo "Ничья" . PHP_EOL;
        $gameStatus = false;
    }else {
        $currentUser = $currentUser === "O" ? "X" : "O";
    }
}

echo "Game over";







