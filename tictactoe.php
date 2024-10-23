<?php

/*

We want to play a tic-tac-toe game 😃

Create a variable with the board (‘-’ === empty) -> OK

Create a function show that will print the board on the screen -> OK

Create a function play that takes two parameters ($x, $y) and will add the move from the player -> 

Create a function to check if a player wins

You have to switch between players

*/

global $player1;
global $player2;
$player1 = 'x';
$player2 = 'y';
global $board;
$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];
function printBoard ($board) { print_r($board).PHP_EOL; }

function play($player, $x, $y){
    global $board;
    if ($player == 'x') {
        $board[$x][$y] = 'x';
    } else if ($player == 'y') {
        $board[$x][$y] = 'y';
    }
    return $board;
}
// printBoard($board);


play($player1, 0, 0);
play($player1, 0, 1);
play($player1, 0, 2);

// printBoard($board);

function checkWins () {
    global $board;
    global $player1;
    global $player2;

    for ($i=0; $i < count($board); $i++) {
        if ($board[$i][0] == $board[$i][1] &&
            $board[$i][0] == $board[$i][2] &&
            $board[$i][1] == $board[$i][2] && 
            $board[$i][0] != '-' && $board[$i][1] != '-' && $board[$i][2] != '-') {
            print_r(value: $board[$i]).PHP_EOL;
                if ($board[$i][0] == 'x') { return 'El ganador es: '.$player1.PHP_EOL;} 
                else if ($board[$i][0] == 'y') {return 'El ganador es: '.$player2.PHP_EOL;}
        }
    }
    for ($i=0; $i < count($board); $i++) {
        for ($j=0; $j < count($board[$i]); $j++) {
        if ($board[0][$j] == $board[1][$j] && 
            $board[0][$j] == $board[2][$j] && 
            $board[1][$j] == $board[2][$j] && 
            $board[0][$j] != '-' && $board[0][$j] != '-' && $board[0][$j] != '-') {
            if ($board[$i][0] == 'x') { return 'El ganador es: '.$player1.PHP_EOL;} 
            else if ($board[$i][0] == 'y') {return 'El ganador es: '.$player2.PHP_EOL;}}
        }
    }
    for ($i=0; $i < count($board); $i++) {
        for ($j=0; $j < count($board[$i]); $j++) {
        if ($board[0][0] == $board[1][1] &&
            $board[0][0] == $board[2][2] && 
            $board[1][1] == $board[2][2] &&
            $board[0][0] != '-' && $board[1][1] != '-' && $board[2][2] != '-') {
            if ($board[$i][0] == 'x') { return 'El ganador es: '.$player1.PHP_EOL;} 
            else if ($board[$i][0] == 'y') {return 'El ganador es: '.$player2.PHP_EOL;}}
        } 
        if ($board[0][2] == $board[1][1] &&
            $board[0][2] == $board[2][0] && 
            $board[1][1] == $board[2][0] &&
            $board[0][2] != '-' && $board[1][1] != '-' && $board[0][2] != '-') {
            if ($board[$i][0] == 'x') { return 'El ganador es: '.$player1.PHP_EOL;} 
            else if ($board[$i][0] == 'y') {return 'El ganador es: '.$player2.PHP_EOL;}
        }
    }
    return 'Not a winner yet'.PHP_EOL;
}    

print_r(checkWins($board));