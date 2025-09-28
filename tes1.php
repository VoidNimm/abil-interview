<?php 
function getUniqueTags($data) {
    $tags = [];
    foreach ($data as $item) {
        foreach ($item['tags'] as $tag) {
            $tags[] = $tag;
        }
    }
    $tags = array_unique($tags);
    sort($tags);
    return $tags;
}

$data = [
    [ "id" => 1, "tags" => ["js", "node", "api"] ],
    [ "id" => 2, "tags" => ["react", "js"] ],
    [ "id" => 3, "tags" => ["css", "design"] ],
];

print_r(getUniqueTags($data));



?>