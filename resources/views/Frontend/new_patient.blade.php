@extends('layouts.layout')
@section('frontend')
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">New Work For Patient</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <div class="card">
                <div class="card-body bootstrap-select-1">
                    <form action="{{route('patient.save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Patient Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="patient_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Age</span>
                                    </div>
                                    <input type="text" class="form-control" name="age">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="select2 form-control mb-3 custom-select" name="doctor_id" style="width: 100%; height:36px;">
                                <option>Select Reffered Doctor</option>
                                <?php
                                    $doctors = App\Models\doctors::all()->sortby('FirstName');
                                ?>
                                @foreach ($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->FirstName}} {{$doctor->LastName}}</option>
                                @endforeach
                                </select>
                            </div>                                    
                            <div class="form-group">
                                <select class="select2 mb-3 select2-multiple" style="width: 100%" name="tooth_number[]" multiple="multiple" size="10" data-placeholder="Select Tooth Number">
                                    <optgroup label="Quadrent 1">
                                        <option value="11">1</option>
                                        <option value="12">2</option>
                                        <option value="13">3</option>
                                        <option value="14">4</option>
                                        <option value="15">5</option>
                                        <option value="16">6</option>
                                        <option value="17">7</option>
                                        <option value="18">8</option>
                                    </optgroup>
                                    <optgroup label="Quadrent 2">
                                        <option value="21">1</option>
                                        <option value="22">2</option>
                                        <option value="23">3</option>
                                        <option value="24">4</option>
                                        <option value="25">5</option>
                                        <option value="26">6</option>
                                        <option value="27">7</option>
                                        <option value="28">8</option>
                                    </optgroup>
                                    <optgroup label="Quadrent 3">
                                        <option value="31">1</option>
                                        <option value="32">2</option>
                                        <option value="33">3</option>
                                        <option value="34">4</option>
                                        <option value="35">5</option>
                                        <option value="36">6</option>
                                        <option value="37">7</option>
                                        <option value="38">8</option>
                                    </optgroup>
                                    <optgroup label="Quadrent 4">
                                        <option value="41">1</option>
                                        <option value="42">2</option>
                                        <option value="43">3</option>
                                        <option value="44">4</option>
                                        <option value="45">5</option>
                                        <option value="46">6</option>
                                        <option value="47">7</option>
                                        <option value="48">8</option>
                                </select> 
                            </div>                                                
                            <div class="form-group">
                                <select class="select2 form-control mb-3 custom-select" name="work_item_id" style="width: 100%; height:36px;">
                                <option>Select Work Item</option>
                                <?php
                                    $work_items = App\Models\work_item::all()->sortby('work_item');
                                ?>
                                @foreach ($work_items as $item)
                                    <option value="{{$item->id}}">{{$item->work_item}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="select2 form-control mb-3 custom-select" name="abutments" style="width: 100%; height:36px;">
                                <option value="NONE">Select Abutments (If Any)</option>
                                <option value="Joint">Joint</option>
                                <option value="Separate">Separate</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="select2 form-control mb-3 custom-select" name="shade_id" style="width: 100%; height:36px;">
                                <option>Select Shade</option>
                                <?php
                                    $Shades = App\Models\tooth_shade::all()->sortby('shade_code');
                                ?>
                                @foreach ($Shades as $item)
                                    <option value="{{$item->id}}">{{$item->shade_code}}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Generate QrCode</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- Plugins js -->
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/pages/jquery.forms-advanced.js')}}"></script>
@endsection