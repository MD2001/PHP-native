<?php
session_unset();
session_destroy();
view("/registers/index.view.php");
