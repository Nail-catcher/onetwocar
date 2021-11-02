@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Пользователи бота</div>

                    <div class="card-body">
                        <table class="col-md-12">
                            <th>Телефон</th>
                            <th>Никнейм</th>
                            <th>Имя</th>

                            <th>Город</th>
                            @foreach($BotUsers as $BotUser)
                                <tr >
                                    <td>{{$BotUser->phone ?? null}}</td>
                                    <td>{{$BotUser->username ?? null}}</td>
                                    <td>{{$BotUser->name ?? null}}</td>


                                    <td>{{$BotUser->city->title ?? null}}</td>
                                </tr>

                            @endforeach

                        </table>

                    </div>
                    {{$BotUsers->links()}}
                </div>

            </div>

        </div>
    </div>

@endsection
<style>
    td, table, th {
        border: 0.1px solid black
    }
</style>