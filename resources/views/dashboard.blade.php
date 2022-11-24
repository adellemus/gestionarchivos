@extends('layouts.app')
@section('css')
    <link rel="stylesheet"  href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/control.css') }}">
@endsection
@section('body')
<nav class="sidebar-navigation">
	<ul>
		<li class="active">
			<i class="bi bi-share"></i>
			<span class="tooltip">priema</span>
		</li>
		<li>
			<i class="bi bi-hdd"></i>
			<span class="tooltip">Devices</span>
		</li>
		<li>
			<i class="bi bi-newspaper"></i>
			<span class="tooltip">Contacts</span>
		</li>
		<li>
			<i class="bi bi-printer"></i>
			<span class="tooltip">Fax</span>
		</li>
		<li>
			<i class="bi bi-sliders"></i>
			<span class="tooltip">Settings</span>
		</li>
	</ul>
</nav>
@endsection
@section('js')
    <script src="{{ asset('js/sidebar.js') }}"></script>
@endsection