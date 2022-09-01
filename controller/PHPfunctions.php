<?php



/********************limit text function*****************/

function LimitCharacter($data,$limit)
{
    if (strlen($data) > $limit)
    {
        $data = substr($data, 0, strrpos(substr($data, 0, $limit), ' ')) . '...';
        return $data;
    }
    else
    {
        return $data;
    }
}