@if (Session::has('success'))
    <div class='flex flex-row bg-teal-100 rounded-lg text-teal-800 py-2 px-5'>
        {!! Session::get('success') !!}
    </div>
@elseif (Session::has('error'))
    <div class='flex flex-row bg-red-200 rounded-lg text-red-800 py-2 px-5'>
        {!! Session::get('error') !!}
    </div>
@endif