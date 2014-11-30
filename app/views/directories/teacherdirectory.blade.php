 @extends('layout.main')


 @section('content')
 {{ Form::open(array('action' => 'UserController@search')) }}

<div class="row search">
  <div class=" small-12 columns">

    <div class="row collapse">
      <!-- Search field -->
      <div class="small-10 large-10 columns">
        <div class="keyword">
          {{Form::select('filter', array('first_name' => 'First Name', 'office' => 'Office'), 'first_name')}}
        </div>
        <div>
          {{ Form::text('filter_text', null, array('placeholder' => 'search here')) }}
        </div>
      </div>
        <div class="small-2 large-2 columns">
          {{ Form::submit('Search', array('class' => 'button postfix', 'position' => 'right')) }}
        </div>
      </div>
    </div>

</div>

       {{Form::close()}}

@if(!empty($allusers))

@foreach ($allusers as $value)
{{$value->first_name}}
{{$value->office}}
@endforeach

@endif