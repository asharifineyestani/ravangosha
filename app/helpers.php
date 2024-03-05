<?php

function getAuthors($limit)
{
    return \App\Models\Author::query()->limit($limit)->get();
}


function getCategories($limit)
{
    return \App\Models\Category::query()->limit($limit)->get();
}
