@extends('layouts.fullscreen')

@section('title')
    {{ $slide->name }}
@endsection

@section('content')
    <script>
        window.addEventListener('load', function() {
            const app = new Vue({
                el: '#app'
            });
        });
    </script>
    <div class="center-contents-horizontally">
        <div id="app" class="container-1920x1080">
            <div class="center-contents-horizontally">
                <slides v-bind:lan_id="{{ $slide->lan->id }}" v-bind:id="{{ $slide->id }}"></slides>
            </div>
            <fullscreen-button></fullscreen-button>
        </div>
    </div>
@endsection