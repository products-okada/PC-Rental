@php
    $status = ["貸出", "返却"];
@endphp

<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <link href="{{asset('/css/log/logtable.css')}}" rel="stylesheet"> -->
    <link href="{{asset('/css/log/toListButton.css')}}" rel="stylesheet">   
    
</head>
    <body>
        <div class="container mx-auto">
            <h1 class="mb-8">履歴</h1>            
            <a href="{{route('list')}}" class="btn btn--orange">貸出画面へ</a>
            <p style="text-align: right">{{$logItems->links()}}</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="p-4 w-1/3">端末ID</th>
                        <th class="p-4 w-1/3">ステータス</th>
                        <th class="p-4 w-1/3">ユーザー名</th>
                        <th class="p-4 w-1/3">更新日時</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logItems as $logItem)
                        <tr>
                            <td class="p-4 w-1/3">{{ $logItem->pcid }}</a></td>
                            <td class="p-4 w-1/3">{{ $status[$logItem->status] }}</td>
                            <td class="p-4 w-1/3">{{ $logItem->user }}</td>
                            <td class="p-4 w-1/3">{{ $logItem->update }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
