<?php

class Matrix {
    protected $cols;
    protected $rows;
    protected $delta;
    protected $matrix;

    function __construct($a) {
        $this->matrix = $a;
        $this->cols = count($this->matrix);
        $this->rows = count($this->matrix[0]);
        $this->delta = ($this->cols - $this->rows);
    }

    public function transponate() {
        $transponated_matrix = [];
        for ($i = 0; $i < ($this->cols - $this->delta); $i++) {
            for ($j = 0; $j < ($this->rows + $this->delta); $j++) {
                $transponated_matrix[$i][$j] = $this->matrix[$j][$i];
            }
        }

        return $transponated_matrix;
    }
}

$test_matrix = [
    ['a1', 'a2', 'a3', 'a4'],
    ['b1', 'b2', 'b3', 'b4'],
    ['c1', 'c2', 'c3', 'c4'],
    ['d1', 'd2', 'd3', 'd4'],
    ['e1', 'e2', 'e3', 'e4'],
];

$matrix = new Matrix($test_matrix);
print_r($matrix->transponate());