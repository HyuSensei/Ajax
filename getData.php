<?php

// configuration
include 'config.php';

$row = $_POST['row'];
$rowperpage = 3;

// selecting posts
$query = 'SELECT * FROM sp limit '.$row.','.$rowperpage;
$result = mysqli_query($con,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $anh = $row['anh'];
    $ten_san_pham = $row['ten_san_pham'];
    $gia = $row['gia'];

    // Creating HTML structure
    $html .= '<div id="post_'.$id.'" class="post">';
    $html .=  '<img src="'.$anh.'" alt="" style="width: 100px">';
    $html .= '<p>'.$ten_san_pham.'</p>';
    $html .= '<p>'.$gia.'</p>';
    $html .= '</div>';

}

echo $html;
