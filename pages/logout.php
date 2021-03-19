<?php

$_SESSION['user'] = null;

header("Location: " . route('/login'));