@extends('layouts.front.site')
@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Add new property</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        <div class="clearfix">
            <div class="wizard-container">
                <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wizard-header">
                            <h3>
                                <b>Add</b> YOUR PROPERTY <br>
                                <small>be careful , to help you to addvertise your property</small>
                            </h3>
                        </div>

                        <ul>
                            <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                            <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                            <li><a href="#step4" data-toggle="tab">Finished </a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane" id="step1">
                                <div class="row p-b-15">
                                    <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <p class="help-block">Select the primary image for your property.</p>
                                            <div class="picture">
                                                <img src="{{ asset('build/assets/front/assets/img/default-property.jpg') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type="file" name="primary_image" id="wizard-picture" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Property name <small>(required)</small></label>
                                            <input name="title" type="text" class="form-control" placeholder="Super villa ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Property price <small>(required)</small></label>
                                            <input name="price" type="text" class="form-control" placeholder="3330000" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone <small>(optional)</small></label>
                                            <input name="phone" type="text" class="form-control" placeholder="+1 473 843 7436">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End step 1 -->

                            <div class="tab-pane" id="step2">
                                <h4 class="info-text"> How much your Property is Beautiful ? </h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Property Description :</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="state">Property Purpose :</label>
                                                <select class="form-control" name="purpose" id="state" title="purpose of property">
                                                    <option value="sale">Sale</option>
                                                    <option value="rent">Rent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="type">Property Type :</label>
                                                <select class="form-control" name="type" id="type" title="type of property">
                                                    <option value="residential">Residential</option>
                                                    <option value="commercial">Commercial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Property Status :</label>
                                                <select id="basic" name="status" class="form-control">
                                                    <option value="ready">Ready</option>
                                                    <option value="under">Under Construction</option>
                                                    <option value="future">In the Future</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label id="state">Property City :</label>
                                                <select class="form-control" name="city" id="state" title="select your city">
                                                    <option value="oboor">Oboor</option>
                                                    <option value="badr">Badr</option>
                                                    <option value="capital">Capital Administrative</option>
                                                    <option value="zayed">Zayed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 padding-top-15">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bed">Min Beds :</label>
                                                <select class="form-control" name="beds" id="bed">
                                                    <option value="1">1 Bed</option>
                                                    <option value="2">2 Beds</option>
                                                    <option value="3">3 Beds</option>
                                                    <option value="4">4 Beds</option>
                                                    <option value="5">More than 4 Beds</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="bath">Min Baths :</label>
                                                <select class="form-control" name="baths" id="bath">
                                                    <option value="1">1 Bath</option>
                                                    <option value="2">2 Baths</option>
                                                    <option value="3">3 Baths</option>
                                                    <option value="4">More than 3 Baths</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="geo">Property Geo (m²) :</label>
                                                <input type="number" class="form-control" name="geo" id="geo" min="40" max="1200" placeholder="Enter area in m²">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 padding-top-15">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="property-images">Choose Images :</label>
                                                <input class="form-control" type="file" name="images[]" id="property-images" multiple>
                                                <p class="help-block">Select multiple images for your property.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="property-video">Property Video :</label>
                                                <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="video" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End step 2 -->

                            <div class="tab-pane" id="step4">
                                <h4 class="info-text"> Finished and submit </h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="">
                                            <p>
                                                <label><strong>Terms and Conditions</strong></label>
                                                By accessing or using GARO ESTATE services, such as posting your property advertisement with your personal information on our website you agree to the collection, use and disclosure of your personal information in the legal proper manner.
                                            </p>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required> <strong>Accept terms and conditions.</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End step 4 -->

                        </div>

                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type="button" class="btn btn-next btn-primary" name="next" value="Next" />
                                <input type="submit" class="btn btn-finish btn-primary"  value="Finish" />
                            </div>

                            <div class="pull-left">
                                <input type="button" class="btn btn-previous btn-default" name="previous" value="Previous" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                <!-- End submit form -->
            </div>
        </div>
    </div>
</div>

@endsection
