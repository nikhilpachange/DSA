function invertedStarPyramidPHP($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        echo str_repeat('*', $i) . PHP_EOL;
    }
}
invertedStarPyramidPHP(5);
