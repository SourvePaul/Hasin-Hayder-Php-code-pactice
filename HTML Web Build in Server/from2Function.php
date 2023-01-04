<?php

function displayOptions($options, $selectOptions) {
    foreach($options as $option) {
        $option = strtolower($option);  //Banana dilea check banana
        $selected = "";
        if(in_array($option, $selectOptions)) {
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>\n",
         $option,
         $selected,
         ucwords($option));
    }
};

?>