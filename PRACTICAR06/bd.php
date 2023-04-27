<?php
function getConexion(){
    return new mysqli("localhost","geografia",
        "geografia","geografia");
}
?>