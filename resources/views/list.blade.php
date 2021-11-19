@php
    $status = ["貸出中", "貸出可能"];
@endphp

<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="{{asset('/css/log/toListButton.css')}}" rel="stylesheet">   
    
</head>
    <body>
        <div class="container mx-auto">
            <h1 class="mb-8">モバイルPC貸出管理</h1>            
            <div class="text-right" ><a href="{{route('log')}}" class="btn btn--orange">履歴へ</a></div>
            <p>ようこそ"{{$user}}"さん</p>
            <table class="table table-striped table-bordered align-middle text-center">
                <thead>
                    <tr>
                        <th class="p-4 w-1/3">端末ID</th>
                        <th class="p-4 w-1/3">ステータス</th>
                        <th class="p-4 w-1/3">最終</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pcLists as $pcList)
                        <tr>
                            <td class="p-4 w-1/3 align-middle text-center">{{ $pcList->pcid }}</td>
                            <td class="p-4 w-1/3 align-middle text-center">
                                <!-- <a  href="{{route('list')}}" -->
                                <a  href="{{route('list')}}/status_change/{{ $pcList->pcid }}"
                                    @if( $pcList->status == 1)
                                        class="btn btn-primary">
                                        {{ $status[$pcList->status] }}
                                    @else
                                        class="btn btn-danger">
                                        {{ $status[$pcList->status] }}
                                    @endif
                                </a>
                            </td>
                            <td class="p-4 w-1/3 align-middle text-center">{{ $pcList->user }}<br>{{ $pcList->update }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
