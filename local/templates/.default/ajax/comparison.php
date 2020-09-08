<?php
session_start();
$_SESSION['COMPARE_LIST'][$_POST['iblock_id']]['ITEMS'][$_POST['element_id']] = $_POST['compareObj'];
echo json_encode(['success' => true]);