function starPyramidPHP($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        echo str_repeat('*', $i) . PHP_EOL;
    }
}
starPyramidPHP(5);
