<?php

function saveImage($photo, $folder)
{
    $image = $photo->getClientOriginalName(); //Name with extension 'filename.jpg'
    $name = explode('.', $image)[0]; // Filename 'filename'

    $fileName = $name . uniqid() . '.' . $photo->getClientOriginalExtension();
    $photo->storeAs($folder, $fileName, 'uploads');
    return 'uploads/' . $folder . '/' . $fileName;
}
