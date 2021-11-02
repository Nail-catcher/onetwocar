@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card col-md-12">
                    <div class="card-header col-md-12">Автомобиль</div>

                    <div class="card-body col-md-12">
                        <div class="card-columns"><h3>ID</h3><h4>{{$car->id}}</h4><br></div>
                        <div class="card-columns"><h3>Марка</h3><h4>{{$car->mark->title}}</h4><br></div>
                        <div class="card-columns"><h3>Название</h3><h4>{{$car->title}}</h4><br></div>

                        <div class="card-columns"><h3>Двигатель</h3><h4>{{$car->engine->volume}} л. {{$car->engine->power}} л.с. {{$car->engine->type_fuel}}</h4><br></div>
                        <div class="card-columns"><h3>Коробка</h3><h4>{{$car->transmission->title}}</h4><br></div>
                        <div class="card-columns"><h3>Привод</h3><h4>{{$car->wd->title}}</h4><br></div>
                        <div class="card-columns"><h3>Расход</h3><h4>{{$car->expenditure}}</h4><br></div>
                        <div class="card-columns"><h3>Город</h3><h4>{{$car->city->title}}</h4><br></div>
                        <div class="card-columns"><h3>Цена</h3><h4>{{$car->price}} Р</h4><br></div>
                        <div class="card-columns"><img class="col-md-12" src="{{$car->image}}" style=""><br></div>




                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
