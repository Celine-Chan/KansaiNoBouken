<?php

// class UploadImg extends DataBase
// {

//     public function addImg()
//     {
//         $query = 'INSERT INTO `gallery` (`gallery_name`, `gallery_textalt`)
//         VALUES (:gallery_name, :gallery_textalt)';

//         $addImgQuery = $this->dataBase->prepare($query);

//         $addImgQuery->bindValue(':gallery_name', $_FILES["fileToUpload"]["name"], PDO::PARAM_STR);
//         $addImgQuery->bindValue(':gallery_textalt', $_FILES['alt'], PDO::PARAM_STR); 

//         if ($addImgQuery->execute()) {
//             return true;
//         } else {
//             return false;
//         }
//     }

// }