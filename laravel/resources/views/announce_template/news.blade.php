@extends($depart_eng.'.default')

@section('content')
<H3> 最新公告 </H3>
<div class="tab-content">
    <div id="lastest_announce" class="tab-pane fade in active">
      <div class="panel panel-default">
        <!-- <div class="panel-heading"> 最新消息</div> -->
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th/>日期
                    <th/>標題
                    <th/>單位
                </tr>
            </thead>
                @php
                    $result = array(array(
                                'date' => time(), 
                                'indexnum' => 1517,
                                'depart' => $depart,
                                'period' => 6,
                                'subject' => "foo"
                              ));
                    $result = json_decode(json_encode($result),FALSE);
                    foreach ($result as $row) {
                        $date = getdate($row->date);
                        if((time()-$row->date)> ($row->period*2592000)) // ignore expired announces base on period(count by month)
                                continue;
                        echo "<tr/>";
                        echo "<td/>" . $date["year"] . "/" . $date["mon"] . "/" . $date["mday"];
                        echo "<td/><a href=\"" . URL::asset('/get_announce') . "/" . $row->indexnum . "\" target=\"_blank\">" . $row->subject . "</a>";
                        echo "<td/>" . $row->depart;
                    }
                @endphp
            </table>
      </div>
    </div>
</div>
@endsection
