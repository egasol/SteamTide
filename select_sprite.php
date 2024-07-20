<?php
    if ($handle = opendir('uploads/'))
    {
        while (false !== ($entry = readdir($handle)))
        {
            if (pathinfo($entry, PATHINFO_EXTENSION) !== "png") continue;
            
            $name = pathinfo($entry, PATHINFO_FILENAME);
            //$path = pathinfo($entry, PATHINFO_BASENAME);
            
            echo "<option value=" . $name . ">" . $name . "</option>";
        }

        closedir($handle);
    }
?>