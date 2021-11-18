@php
    $status = ["貸出", "返却"];
@endphp


<link href="{{asset('/css/log/logtable.css')}}" rel="stylesheet">
<link href="{{asset('/css/log/toListButton.css')}}" rel="stylesheet">
    <div class="container mx-auto">
        <h1 class="mb-8">履歴</h1>
        <a href="http://localhost/laravel/pc_rental/public/list" class="btn btn--orange">貸出画面へ</a>

        <br><br>
        <table class="text-left w-full">
            <thead class="bg-black flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/3">端末ID</th>
                    <th class="p-4 w-1/3">ステータス</th>
                    <th class="p-4 w-1/3">ユーザー名</th>
                    <th class="p-4 w-1/3">更新日時</th>
                </tr>
            </thead>
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
            
                @foreach($logItems as $logItems)
                    <tr class="flex w-full mb-4">
                        <td class="p-4 w-1/3">{{ $logItems->pcid }}</a></td>
                        <td class="p-4 w-1/3">{{ $status[$logItems->status] }}</td>
                        <td class="p-4 w-1/3">{{ $logItems->user }}</td>
                        <td class="p-4 w-1/3">{{ $logItems->update }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

