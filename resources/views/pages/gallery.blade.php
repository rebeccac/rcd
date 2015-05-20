
@extends('layouts.layout')
<?php $page = 'gallery';?>
@section('content')
<div class="content">
    <h2>Gallery</h2>


    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section>


                <div class="page-nav">
                    <?php echo $images->render(); ?>
                </div>
				<ul class="rc-album">
                    <?php
                    $i = 0;
                    $count = count($images);
                    ?>
                    @foreach($images as $image)
                    <li>
                        <a href=<?php echo "#image-".$i ?>>
                            <img src="{{asset('images/'.$image->url)}}" alt="{{$image->alt}}">
                            <span>{{$image->title}}</span>
                        </a>
                        <div class="rc-overlay" id=<?php echo "image-".$i ?>>
                            <div class="rc-overlay-top">
                                <a href="#page" class="rc-close">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                                <div class="rc-nav">
                                    <div class="prev">
                                        <a href=<?php
                                        if ($i == 0) {
                                            echo "#image-".($count - 1);
                                        }
                                        else {
                                            echo "#image-".($i - 1);
                                        } ?>
                                        class="rc-prev">&larr;</a>
                                    </div>
                                    <div class="next">
                                        <a href=<?php
                                        if ($i == $count - 1) {
                                            echo "#image-0";
                                        }
                                        else {
                                            echo "#image-".($i + 1);
                                        } ?>
                                        class="rc-next">&rarr;</a>
                                    </div>
                                </div>



                            </div>

                            <div class="rc-overlay-box">
                                <!-- <div class="load">
                                    <span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>

                                </div> -->

                                <img src="{{asset('images/'.$image->url)}}" alt="$image->alt">
                                <div class="rc-details">
                                    <h3 class="title">{{$image->title}}</h3>
                                    <span class="gallery-description">{{$image->description}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $i++; ?>
                @endforeach
                </ul>

                <div class="clear"></div>

                <div class="page-nav">
                    <?php echo $images->render(); ?>
                </div>
            </section>
        </div>
    </div>

</div><!-- content -->

@endsection
