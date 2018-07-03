<div class="row">

<div class="card col-lg-2 text-center">
    <h4 class="card-header">  Domicilio </h4>
    <div class="card-body">
       <h4> <i class="fas fa-globe fa-5x text-primary"></i></h4>
       <?php echo e(trans('message.address')); ?>

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
    <h5 class="display-5"><i class="fas fa-pencil-alt" ></i> <?php echo e(trans('message.dropus')); ?></h5>
    </div>
        <br>
    
        <?php echo Form::open(['route' => 'send', 'method' => 'post']); ?>

          
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <label for="name"><?php echo e(trans('message.yourname')); ?></label>
            <input type="name" name="name" class="form-control" id="Name" placeholder="<?php echo e(trans('message.yourname')); ?>">
            <?php if($errors->has('name')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email1"><?php echo e(trans('message.emailaddress')); ?></label>
            <input type="email" name="email" class="form-control" id="email" placeholder="<?php echo e(trans('message.enteremail')); ?>">
            <?php if($errors->has('email')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('Message') ? ' has-error' : ''); ?>">
            <label><?php echo e(trans('message.yourtext')); ?></label>
            <textarea class="form-control" name="Message" rows="4"></textarea>
            <?php if($errors->has('email')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('Message')); ?></span>
            <?php endif; ?>
        </div>
        <br>
        <button type="submit" class="btn btn-large btn-success"><?php echo e(trans('message.submit')); ?></button>
    <?php echo Form::close(); ?>

    
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
