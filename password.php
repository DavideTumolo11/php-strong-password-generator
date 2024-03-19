<?php
session_start();
if (isset($_SESSION['password'])) {
    echo "La tua password generata è: " . $_SESSION['password'];
} else {
    echo "Nessuna password generata.";
}
?>