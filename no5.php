<?php

$teks2 = "<h1>hello world</h1> @odepermitaa.";

function deteksiUsername($input)
{
    $regex = "/@([a-zA-Z0-9_]+)/";
    $timpa = "<a href='https://www.instagram.com/p/CHuu15TBU5d/?utm_source=ig_web_copy_link'>$0</a>";

    return preg_replace($regex, $timpa, $input);
}
echo deteksiUsername($teks2);
?>