<?php

if(isset($_GET['sort'])) {
    if($_GET['sort'] == 'Expensive')
    {
        $sort = 'ASC';
        $cars = select_all_car_sort($sort);
    }
    else
    {
        $sort = 'DESC';
        $cars = select_all_car_sort($sort);

    }
}
else
{
    $cars = select_all_car();
}