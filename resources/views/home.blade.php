@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Заявки</div>

                <div class="card-body">
                   <table class="col-md-12">
                       <th>Телефон</th>
                       <th>Никнейм</th>
                       <th>Имя</th>
                       <th>Запрос</th>
                       <th>Адрес</th>
                        @foreach($orders as $order)
                            <tr >
                                <td>{{$order->botUser->phone ?? null}}</td>
                                <td>{{$order->botUser->username ?? null}}</td>
                                <td>{{$order->botUser->name ?? null}}</td>

                       <td>
                           @if(!empty($order->car->title))
                           <a href="/cars/{{$order->car->id ?? }}">Автомобиль: {{$order->car->title}}</a>
                               @elseif(!empty($order->set->title))
                               Модель: {{$order->set->model->title}} Комплектация: {{$order->set->title}}
                               @endif
                       </td>

                       <td>{{$order->address ?? null}}</td>
                            </tr>

                            @endforeach

                   </table>

                </div>
                {{$orders->links()}}
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