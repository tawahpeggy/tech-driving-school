@extends('layouts.app')

@section('content')

<div class="w-100 h-100 bg-light">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto my-5 rounded bg-w">
            <div class="p-2 ">
                <form action="{{route('user.apply')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="py-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PERSONAL INFORMATION</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">IDENTIFICATION</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MODE</button>
                                <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">SESSION</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="fs-3 text-uppercase text-center t-b py-5">Personal Information</div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">First name:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="text" name="first_name" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="first name"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">Last name:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="text" name="last_name" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" placeholder="last name"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">Date of birht:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="date" name="dob" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="date of birth"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">place of birth:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="text" name="pob" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="place of birth"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="fs-3 text-uppercase text-center t-b py-5">IDENTIFICATION</div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">CNI number:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="text" name="cni_number" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="CNI number"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">Date issued:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="date" name="cni_date" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white" required placeholder="date issued"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">post:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><input type="text" name="cni_post" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required placeholder="post"></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">ID-card:</div>
                                    <div class="col-sm-8">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="id-front-tab" data-bs-toggle="tab" data-bs-target="#id-front" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Front side</button>
                                                <button class="nav-link" id="id-back-tab" data-bs-toggle="tab" data-bs-target="#id-back" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Back side</button>
                                                <button class="nav-link" id="photo-tab" data-bs-toggle="tab" data-bs-target="#photo" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Passport size Photo</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="id-front" role="tabpanel" aria-labelledby="id-front-tab" tabindex="0">
                                                <div class="row py-2">
                                                    <div class="col-sm-4 text-end text-capitalize">upload image:</div>
                                                    <div class="col-sm-8 text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="id_front" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                    <div class="col-9 mx-auto image-preview">
                                                        <img src="" alt="" class="w-100 h-auto my-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="id-back" role="tabpanel" aria-labelledby="id-back-tab" tabindex="0">
                                                <div class="row py-2">
                                                    <div class="col-sm-4 text-end text-capitalize">upload image:</div>
                                                    <div class="col-sm-8 text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="id_back" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                    <div class="col-9 mx-auto image-preview">
                                                        <img src="" alt="" class="w-100 h-auto my-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab" tabindex="0">
                                                <div class="row py-2">
                                                    <div class="col-sm-4 text-end text-capitalize">upload image:</div>
                                                    <div class="col-sm-8 text-end text-capitalize"><input type="file" accept="image/*" onchange="preview(this)" name="passport_photo" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white preview" required></div>
                                                    <div class="col-9 mx-auto image-preview">
                                                        <img src="" alt="" class="w-100 h-auto my-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="fs-3 text-uppercase text-center t-b py-5">OPERATING MODE</div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">super fast mode:</div>
                                    <div class="col-sm-8 text-start text-capitalize fw-bold">FCFA 200,000</div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">fast mode:</div>
                                    <div class="col-sm-8 text-start text-capitalize fw-bold">FCFA 150,000</div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-4 text-end text-capitalize">normal mode:</div>
                                    <div class="col-sm-8 text-start text-capitalize fw-bold">FCFA 100,000</div>
                                </div>
                                <div class="row py-2 border-top my-4">
                                    <div class="col-sm-4 text-end text-capitalize">mode:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><select name="mode" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required>
                                        <option value="" selected>select mode</option>
                                        <option value="1">Super Fast Mode</option>
                                        <option value="2">Fast Mode</option>
                                        <option value="3">Normal Mode</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                                <div class="fs-3 text-uppercase text-center t-b py-5">TRAINING SESSION</div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-dark px-4 py-2 text-uppercase">click to view sessions</button>
                                </div>
                                <div class="row py-2 border-top my-4">
                                    <div class="col-sm-4 text-end text-capitalize">session:</div>
                                    <div class="col-sm-8 text-end text-capitalize"><select name="session" id="" class="form-control border-0 border-bottom border-dark rounded-0 bg-white " required>
                                        <option value="" selected>select session</option>
                                        <option value="1">NOVEMBER-JANUARY</option>
                                        <option value="2">JANUARY-MARCH</option>
                                        <option value="3">FRBRUARY-APRIL</option>
                                        <option value="4">APRIL-JUNE</option>
                                        <option value="5">MAY-JULY</option>
                                        <option value="6">JULY-SEPTEMBER</option>
                                        <option value="7">AUGUST-OCTOBER</option>
                                        <option value="8">OCTOBER-DECEMBER</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Comfirm" class="px-4 py-2 btn btn-dark">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

    function preview(element) {
        console.log(element.files[0]);
        element.parentElement.nextElementSibling.querySelector('img').src = URL.createObjectURL(element.files[0]);
    }
</script>
@endsection
