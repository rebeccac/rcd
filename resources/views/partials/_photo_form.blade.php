<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Title')) !!}
</div>

<div class="form-group">
    {!! Form::label('alt', 'Alt description:') !!}
    {!! Form::text('alt', null, array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Alt description')) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Text description:') !!}
    {!! Form::text('description', null, array('required',
                                    'class'=>'form-control',
                                    'placeholder'=>'Text description')) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Select an image to upload') !!}
    {!! Form::file('image', array ('required')) !!}
              </div>

<div class="form-group">
    {!! Form::submit($submit_text, array('class'=>'submit')) !!}
</div>
