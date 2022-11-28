<?php
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include "../../model/config.php";
    include "Carbon/autoload.php";

    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $sql = "SELECT * from bill_1 where ngaydathang between '$subdays' and '$now' order by ngaydathang asc";
    $sql_query = mysqli_query($mysqli,$sql);

    while ($val = mysqli_fetch_array($sql_query)) {
        $chart_data[]= array(
            'date' => $val['ngaydathang'],  
            'order' => $val['donhang'],
            'sales' => $val['doanhthu'],
            'quantity' => $val['soluongban']
        );
    }
            // print_r($chart_data);
    echo $data = json_encode($chart_data);
?>