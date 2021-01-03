@if (session()->has('message'))
<div class="px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
    {{ session('message') }}
</div>
@endif

@if (session()->has('success'))
<div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
    {{ session('success') }}
</div>
@endif

@if (session()->has('error'))
<div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
    {{ session('error') }}
</div>
@endif

@if ($errors->any())
<div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
    Please see errors below.
</div>
@endif
