<?php
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';