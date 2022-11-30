<?php
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include "../../model/config.php";
    include "Carbon/autoload.php";
    $chart_data = [];
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $sql = "SELECT * from thong_ke where ngaydat between '$subdays' and '$now' order by ngaydat asc" ;
    $sql_query = mysqli_query($mysqli,$sql);

    while ($val = mysqli_fetch_array($sql_query)) {
        $chart_data[]= array(
            'date' => $val['ngaydat'],
            'order' => $val['donhang'],
            'sales' => $val['doanhthu'],
            'quantity' => $val['soluongban'],
        );
    }

    echo $data = json_encode($chart_data);
?>