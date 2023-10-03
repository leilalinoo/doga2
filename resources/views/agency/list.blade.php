@foreach ($agencies as $agency)
    <form action="/api/agency/{{$agency->agency_id}}" method="post"></form>
    @csrf
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$agency->name}}">
    </div>
@endforeach