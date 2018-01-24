<?php
function Query($sql, $args = null, $fetch = true, $numrow = false, $lastid = false)
{
    $db = Connect::getDatabaseObject();
    $query = $db->prepare($sql);
    if ($args != null) {
        foreach ($args as $key => $value) {
            $query->bindValue(":" . $key, $value);
        }
    }
}
