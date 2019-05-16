@extends('lawyer.layouts.app')

@section('content')
    <div class="nav-btn pull-left">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="clear"></div>
    <div id='calendar'></div>
    <div class="calendar_btn">
        <button type="button" name="button">User Name</button>
    </div>

    <div class="year_btn">
        <div id='Year_array_prev'> <span class="fc-icon fc-icon-chevron-left"></span> </div>
        <div id='Year_array_next'> <span class="fc-icon fc-icon-chevron-right"></span> </div>
    </div>
@endsection
