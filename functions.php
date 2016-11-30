/*Finds Image Types*/
function findtype($inputname) {
    $uzanti = null;
    if($_FILES[$inputname]["type"] == "image/png") {
        $uzanti = ".png";
    } else if($_FILES[$inputname]["type"] == "image/jpeg") {
        $uzanti = ".jpg";
    } else if($_FILES[$inputname]["type"] == "image/bmp") {
        $uzanti = ".bmp";
    } else if($_FILES[$inputname]["type"] == "image/tiff") {
        $uzanti = ".tiff";
    }
    return $uzanti;
}

/*usage*/
/* $inputname is your image input name
<input type="file" name="filename"/>
$input="filename";
echo findtype($input);
returns 
.jpg,.png,.bmp,.tiff


