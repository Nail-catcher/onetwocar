@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Модели авто</div>

                    <div class="card-body">
                        <table class="col-md-12">
                            <th>ID</th>
                            <th>Марка</th>
                            <th>Название</th>
                            <th>Начальная цена</th>
                            <th>Кузов</th>
                            <th>Видимость</th>
                            @foreach($models as $model)
                                <tr >
                                    <td>{{$model->id ?? null}}</td>
                                    <td>{{$model->mark->title ?? null}}</td>
                                    <td>{{$model->title ?? null}}</td>
                                    <td>{{$model->price ?? null}}</td>
                                    <td>{{$model->body ?? null}}</td>
                                    <td>
                                        @if($model->visible==1)
                                            <b>Выборка включена</b>  <form name="visible" method="POST" action="/models/visible">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$model->id}}" />
                                                     <input type="submit" name="submit" value="Отключить" />
                                                </form>
                                            @else
                                            <b>Выборка отключена</b>  <form name="visible"  method="POST" action="/models/visible">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$model->id}}" />
                                                <input type="submit" name="submit" value="Включить" />
                                            </form>
                                            @endif
                                    </td>
                                </tr>

                            @endforeach

                        </table>

                    </div>
                    {{$models->links()}}
                </div>

            </div>

        </div>
    </div>

@endsection

<script>
    // получаем объект формы
    var form = document.forms.visible;
    // прикрепляем обработчик кнопки
    form.submit.addEventListener("click", sendRequest);

    // обработчик нажатия
    function sendRequest(event){

        event.preventDefault();
        var formData = new FormData(form);

        var request = new XMLHttpRequest();

        request.open("POST", form.action);

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200)
                document.getElementById("output").innerHTML=request.responseText;
        }
        request.send(formData);
    }

</script>
<style>
    td, table, th {
        border: 0.1px solid black
    }
</style>