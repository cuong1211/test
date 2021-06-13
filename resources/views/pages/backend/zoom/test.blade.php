<?php 
 if(isset($x)){
    foreach($x as $item){
        dd($item);
    }
}
else {
    echo "ko";
}

<table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Phòng</th>
                                <th>Loại</th>
                                <th>Thời gian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count = 1;
                            
                            @endphp 
                            @foreach ($x as $item)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$item['topic'] }}</td>
                                    <td>{{$item['type']}}</td>
                                    <td>{{$item['start_time']}}
                                    <td>
                                        <span class="table-remove"><button type="button"
                                                class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                    </td>
                                </tr>
                                @php
                                    $count++; 
                                @endphp 
                            @endforeach
                        </tbody>
                    </table>