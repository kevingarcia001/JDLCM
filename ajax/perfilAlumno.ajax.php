<?php

// ajax/menu.ajax.php
require_once '../controllers/menu.controllers.php';

$profileType = $_POST['profileType'];
$menuItems = MenuController::getSecondaryMenu($profileType);

foreach ($menuItems as $menuItem) {
    echo '<li class="nav-item">';
    echo '<a href="' . $menuItem['url'] . '" class="nav-link">';
    echo '<i class="nav-icon ' . $menuItem['icon'] . '"></i>';
    echo '<p>' . $menuItem['text'] . '</p>';
    echo '</a>';
    echo '</li>';
}
?>