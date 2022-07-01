<?php
// Simple page redirect
function redirect($page)
{
    header('location: ' . URLROOT . '?url=' . $page);
}