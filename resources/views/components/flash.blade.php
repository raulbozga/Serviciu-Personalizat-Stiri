@if(session()->has('success'))

<div style="text-align: center; background-color: lightgreen; border-radius:2rem;" x-data="{show:true}" x-init="setTimeout(()=> show = false, 4000)" x-show="show">
    <p style="text-align: center; color: blue;">
        {{session('success')}}
    </p>
</div>
@endif