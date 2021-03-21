<?php
session_destroy();
header("Location: " . route('/login'));