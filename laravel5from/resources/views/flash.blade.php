 @if(Session::has('flash_message'))
 <div class="Alert Alert--{{ ucwords(Session::get('flash_message_level'))}}">
 	<h3>{{Session::get('flash_message')}}</h3>
</div>
@endif