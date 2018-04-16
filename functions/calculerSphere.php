<?php
function calculerSurfaceSphere(int $rayon) : float {
    if ($rayon >= 0) {
        return $rayon ** 2 * pi() * 4;
    }

    return false;
}

function calculerVolumeSphere($rayon) {
    if ($rayon >= 0) {
        return 4/3 * pi() * $rayon ** 3;
    }

    else {
        return false;
    }
}
