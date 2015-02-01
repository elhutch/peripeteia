 @extends('layout.main')


 @section('content')
 {{ Form::open(array('action' => 'UserController@search')) }}

<div class="row search">
  <div class="small-12 columns">

    <div class="row collapse">
      <!-- Search field -->
      <div class="small-10 large-10 columns">
        <div>
        @if($errors->first('filter_text'))
          {{ Form::text('filter_text', null, array('data-tooltip', 'aria-haspopup' => 'true', 'class' => 'has-tip error', 'title' => 'Search by teacher first name, last name, or a combination of both. You can use partial names. (ie. John Smith, John, Smith, or J Smith)', 'placeholder' => 'search here', 'autofocus')) }}
          <small class="error">{{$errors->first('filter_text')}}</small>
        @else
          {{ Form::text('filter_text', null, array('data-tooltip', 'aria-haspopup' => 'true', 'class' => 'has-tip', 'title' => 'Search by teacher first name, last name, or a combination of both. You can use partial names. (ie. John Smith, John, Smith, or J Smith)', 'placeholder' => 'search here', 'autofocus')) }}
        @endif
        </div>
      </div>
        <div class="small-2 large-2 columns">
          {{ Form::submit('Search', array('class' => 'button postfix', 'position' => 'right')) }}
        </div>
      </div>
    </div>

</div>

   {{Form::close()}}
<div class="row">
  <div class="small-12 columns">
    @if(!empty($allusers))
    <table>
      <thead>
        <tr>
          <th width="250">First Name</th>
          <th width="250">Last Name</th>
          <th width ="100">Office</th>
          <th width="200">Office Hours</th>
          <th width="250">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allusers as $value)
        <tr>
          <td>{{$value->first_name}}</td>
          <td>{{$value->last_name}}</td>
          <td>{{$value->office}}</td>
          <td></td>
          <td>{{$value->email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    {{"No results match your search."}}
    @endif
  </div>
</div>