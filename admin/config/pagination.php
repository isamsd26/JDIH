<?php

// Set the number of records per page
$records_per_page = 5;

// Get the current page number from the query string
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the offset
$offset = ($page - 1) * $records_per_page;

// Modify the query to include LIMIT and OFFSET
$query = "SELECT * FROM tindakan ORDER BY tanggal DESC LIMIT $records_per_page OFFSET $offset";
$result = mysqli_query($koneksi, $query);

// Fetch the actions
$actions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $actions[] = $row;
}

// Get the total number of records for pagination
$total_query = "SELECT COUNT(*) as total FROM tindakan";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_records / $records_per_page);
