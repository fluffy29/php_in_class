<?php

echo '<pre>';
print_r($_FILES);
echo '</pre>';


$destination_path = './image/' .$_FILES['myfile']['full_path'];
move_uploaded_file($_FILES['myfile']['tmp_name'], $destination_path);

?>