<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2017-10-21
 * Time: 13:59
 */

function makeTextInputField() {
        for ($i = 8; i<= ($i+6); $i++){
            echo "
            <label for='input' . $i></label>
            <input type='text' name='input' . $i />
        ";
        }

    }

?>