<div class="row">

<div class="card col-lg-2 text-center">
    <h4 class="card-header">  Domicilio </h4>
    <div class="card-body">
       <h4> <i class="fas fa-globe fa-5x text-primary"></i></h4>
       {{ trans('message.address') }}
        <p class="lead ">
            Diego Portales 1383,<br/>
            Temuco,<br/>
            <i class="fas fa-mobile"></i> Mov. 87695505<br/>
            <i class="fas fa-phone"></i>Fono 45-2294321<br/>
            Chile
        </p>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Ve a algún lugar</a>
    </div>
    <div class="card-footer text-muted"> HerBerk </div>
</div>

<div class="col-lg-4">
    <div style="font-size:3em; color:Tomato">
    <h5 class="display-5"><i class="fas fa-pencil-alt" ></i> {{ trans('message.dropus') }}</h5>
    </div>
        <br>
    {{--<form role="form" action="send" method="post" enctype="plain">--}}
        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
          {{--{{ csrf_field() }}--}}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">{{ trans('message.yourname') }}</label>
            <input type="name" name="name" class="form-control" id="Name" placeholder="{{ trans('message.yourname') }}">
            @if ($errors->has('name'))
                <span class="form-text text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email1">{{ trans('message.emailaddress') }}</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="{{ trans('message.enteremail') }}">
            @if ($errors->has('email'))
                <span class="form-text text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('Message') ? ' has-error' : '' }}">
            <label>{{ trans('message.yourtext') }}</label>
            <textarea class="form-control" name="Message" rows="4"></textarea>
            @if ($errors->has('email'))
                <span class="form-text text-danger">{{ $errors->first('Message') }}</span>
            @endif
        </div>
        <br>
        <button type="submit" class="btn btn-large btn-success">{{ trans('message.submit') }}</button>
    {!! Form::close() !!}
    {{--</form>--}}
</div>

    <div class="col-lg-6">
        <h4  class="display-5">Chile, Region de la Araucania,  Temuco</h4>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: -38.735902, lng: -72.590374};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 6,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVkX45aEX3xiWRq0WuE9LOyN5cg0iT8oU&callback=initMap">
        </script>
    </div>
</div>
