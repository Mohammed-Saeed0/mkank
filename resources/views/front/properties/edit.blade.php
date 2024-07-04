@extends('layouts.front.site')
@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Edit Property</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="clearfix" >
            <div class="wizard-container">

                <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                    <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="wizard-header">
                            <h3>
                                <b>Edit</b> YOUR PROPERTY <br>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                            </h3>
                        </div>

                        <ul>
                            <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                            <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                            <li><a href="#step4" data-toggle="tab">Finished </a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane" id="step1">
                                <div class="row p-b-15  ">
                                    <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <p class="help-block">Select the primary image for your property.</p>
                                            <div class="picture">
                                                <img src="{{ $property->primary_image ? asset('storage/' . $property->primary_image) : asset('build/assets/front/assets/img/default-property.jpg') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type="file" name="primary_image" id="wizard-picture">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Property name <small>(required)</small></label>
                                            <input name="title" type="text" class="form-control" value="{{ $property->title }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Property price <small>(required)</small></label>
                                            <input name="price" type="text" class="form-control" value="{{ $property->price }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone <small>(empty if you wanna use default phone number)</small></label>
                                            <input name="phone" type="text" class="form-control" value="{{ $property->phone }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 1 -->

                            <div class="tab-pane" id="step2">
                                <h4 class="info-text"> How much your Property is Beautiful ? </h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Property Description :</label>
                                                <textarea name="description" class="form-control">{{ $property->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="state">Property Status :</label>
                                                <select class="form-control" name="purpose" id="state" title="purpose of property">
                                                    <option value="sale" {{ $property->purpose == 'sale' ? 'selected' : '' }}>sale</option>
                                                    <option value="rent" {{ $property->purpose == 'rent' ? 'selected' : '' }}>rent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="type">Property type :</label>
                                                <select class="form-control" name="type" id="type" title="type of property">
                                                    <option value="residential" {{ $property->type == 'residential' ? 'selected' : '' }}>residential</option>
                                                    <option value="commercial" {{ $property->type == 'commercial' ? 'selected' : '' }}>commercial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Property Status  :</label>
                                                <select id="basic" name="status" class="selectpicker show-tick form-control">
                                                    <option value="ready" {{ $property->status == 'ready' ? 'selected' : '' }}>ready</option>
                                                    <option value="under" {{ $property->status == 'under' ? 'selected' : '' }}>under construction</option>
                                                    <option value="future" {{ $property->status == 'future' ? 'selected' : '' }}>in the future</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="state">Property city :</label>
                                                <select class="form-control" name="city" id="state" title="select your city">
                                                    <option value="oboor" {{ $property->city == 'oboor' ? 'selected' : '' }}>oboor</option>
                                                    <option value="badr" {{ $property->city == 'badr' ? 'selected' : '' }}>badr</option>
                                                    <option value="capital" {{ $property->city == 'capital' ? 'selected' : '' }}>capital administrative</option>
                                                    <option value="zayed" {{ $property->city == 'zayed' ? 'selected' : '' }}>zayed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 padding-top-15">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bed">Min bed :</label>
                                                <select class="form-control" name="beds" id="bed">
                                                    <option value="1" {{ $property->beds == 1 ? 'selected' : '' }}>1 bed</option>
                                                    <option value="2" {{ $property->beds == 2 ? 'selected' : '' }}>2 beds</option>
                                                    <option value="3" {{ $property->beds == 3 ? 'selected' : '' }}>3 beds</option>
                                                    <option value="4" {{ $property->beds == 4 ? 'selected' : '' }}>4 beds</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bath">Min bath :</label>
                                                <select class="form-control" name="baths" id="bath">
                                                    <option value="1" {{ $property->baths == 1 ? 'selected' : '' }}>1 bath</option>
                                                    <option value="2" {{ $property->baths == 2 ? 'selected' : '' }}>2 baths</option>
                                                    <option value="3" {{ $property->baths == 3 ? 'selected' : '' }}>3 baths</option>
                                                    <option value="4" {{ $property->baths == 4 ? 'selected' : '' }}>4 baths</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="geo">Geo location :</label>
                                                <input type="text" class="form-control" name="geo" value="{{ $property->geo }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End step 2 -->

                            <div class="tab-pane" id="step4">
                                <h4 class="info-text">Finished and submit </h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Video Link :</label>
                                            <input type="text" name="video" class="form-control" value="{{ $property->video }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 4 -->

                        </div>

                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-primary' name='finish' value='Finish' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!-- end row -->
</div>
</div>

@endsection
