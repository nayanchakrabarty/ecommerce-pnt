<?php
function handlePagination($obj)
{
    //dd($obj->currentPage());
    $serial = 1;
    if($obj->currentPage()>1){
        $serial = (($obj->currentPage() - 1)*$obj->perPage()) + 1;
    }
    return $serial;
}
