<?php
function get_youtube_id($url)
{    
    $id = '';
    $yt = parse_url($url);
    
    if ($yt['host'] == 'youtu.be') {
        $id = trim($yt['path'], '/');
    } else if ($yt['path'] == '/watch') {
        parse_str($yt['query'], $query);
        $id = $query['v'];
    } else {
        $id = '';   
    }
    return $id;    
}

function get_youtube_thumbnails($id)
{
    $yt = array();
    $yt['default'] = "http://img.youtube.com/vi/$id/default.jpg";
    $yt[0] = "http://img.youtube.com/vi/$id/0.jpg";
    $yt[1] = "http://img.youtube.com/vi/$id/1.jpg";
    $yt[2] = "http://img.youtube.com/vi/$id/2.jpg";
    $yt[3] = "http://img.youtube.com/vi/$id/3.jpg";
    return $yt;
}