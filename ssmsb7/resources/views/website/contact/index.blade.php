@extends('website.master')
@section('title')
    Contact
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-warning">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Contact With Us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <form action="" method="POST" >

                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input name="name" type="text" class="form-control"  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input name="email" type="email" class="form-control"  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input name="mobile" type="number" class="form-control"  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Send Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" type="text" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input  type="submit" class="btn btn-outline-success px-5" value="Send"  />
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h4 >Emergency Contact</h4>
                        <hr/>
                        <address>
                            Dhaka, Bangladesh <br>
                            Phone: 684564864867,486467486684
                            Email: himel@gmail.com
                        </address>

                        <ul class="nav d-flex ">
                            <li><a class="nav-link" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="nav-link" href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="nav-link" href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a class="nav-link" href=""><i class="fa-brands fa-snapchat"></i></a></li>
                            <li><a class="nav-link" href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{--    map--}}
    <section class="py-5 mt-3 bg-light">
        <div class="container">
            <div class="card card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7303.810712680541!2d90.38474312503662!3d23.75075418835667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.7509178!2d90.3848506!4m5!1s0x3755b8a2b7de34cf%3A0xbee11ae6859ab7e7!2zQkRCTCBTZWN1cml0aWVzIEx0ZCwgMTIg4KaV4Ka-4Kac4KeAIOCmqOCmnOCmsOCngeCmsiDgpofgprjgprLgpr7gpq4g4Ka44Kaw4Kaj4Ka_LCDgpqLgpr7gppXgpr4gMTIxNQ!3m2!1d23.751032499999997!2d90.39309109999999!5e0!3m2!1sbn!2sbd!4v1662532608192!5m2!1sbn!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection

