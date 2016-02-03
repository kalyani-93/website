<?php

    function makeTextInputField($name) {
        $text = ucfirst($name);
        echo "
            <label for='{$name}'>{$text}</label>
            <input type='text' name='{$name}' />
        ";
    }

function makebuttonInputField($name) {
        $text = ucfirst($name);
        echo "
            <label for='{$name}'>{$text}</label>
            <input type='button' name='{$name}' />
        ";
    }

?>
<h1>Welcome</h1>
<?php makeTextInputField('email'); ?>
<h2>name</h2>
<?php makebuttonInputField('submit'); ?>
