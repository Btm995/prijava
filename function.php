<?php

function paginate($tbl="", $order = [] , $limit= 10, $current_page = 1){
    global $conn;

    $total = $conn->query("SELECT * FROM `{$tbl}`")->num_rows;


    $offset = ($current_page == 1) ? 0 : ($limit * $current_page) - $limit;


    $order_by = "";
    foreach($order as $k=> $v){
        if(!empty($order_by)) $order_by .= ", ";
        if(empty($order_by)) $order_by .= " order by ";
        $order_by .= " {$k} {$v} ";
    }

    $sql = "SELECT * FROM `{$tbl}` {$order_by} LIMIT {$limit} OFFSET {$offset}";
    $query = $conn->query($sql);

    $data = [];
    if($query->num_rows){
        $data = $query->fetch_all(MYSQLI_ASSOC);
    }

    $displayed_data = ($offset + 1) . "-". ($offset + $query->num_rows);

    $has_next = (bool) (($offset + $query->num_rows) < $total);
    $has_prev = (bool) ($current_page > 1);

    $pages = ceil($total / $limit);
    $pb = range(1,$pages);
    if($pages > 5){
        if($current_page >= 1 && $current_page <= 3){
            $new_pb = range(1, 3);
            $new_pb[] = '...';
            $new_pb[] = $pb[array_key_last($pb)];
        }elseif($current_page >= 4 && $current_page < $pb[array_key_last($pb)]){
            $new_pb = range(1, 2);
            $new_pb[] = '...';
            $new_pb[] = $current_page;
            if(($current_page +1) != $pb[array_key_last($pb)]){
                $new_pb[] = '...';
            }
            $new_pb[] = $pb[array_key_last($pb)];
        }else{
            $new_pb = range(1, 3);
            $new_pb[] = '...';
            $new_pb[] = $pb[array_key_last($pb)];
        }
    }

    if(isset($new_pb))
    $pb = $new_pb;

    return (object) [
        'data' => $data,
        'current_page' => $current_page,
        'displayed_data' => $displayed_data,
        'total' => $total,
        'has_prev' => $has_prev,
        'has_next' => $has_next,
        'pagination_buttons' => $pb
    ];
}
