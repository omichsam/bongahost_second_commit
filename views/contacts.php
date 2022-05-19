<style>
    a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
    }

    a,
    a:hover {
        text-decoration: none !important;
    }

    .text-black {
        color: #000;
    }

    /* .content {
        padding: 7rem 0;
    } */

    .heading {
        font-size: 2.5rem;
        font-weight: 900;
    }

    .form-control {
        border: none;
        border-bottom: 1px solid #ccc;
        padding-left: 0;
        padding-right: 0;
        border-radius: 0;
        background: none;
    }

    .form-control:active,
    .form-control:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #000;
    }

    .col-form-label {
        color: #000;
        font-size: 13px;
    }

    .btn,
    .form-control,
    .custom-select {
        height: 45px;
    }

    .custom-select:active,
    .custom-select:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #000;
    }

    .btn {
        border: none;
        border-radius: 0;
        font-size: 12px;
        letter-spacing: .2rem;
        text-transform: uppercase;
    }

    .btn.btn-primary {
        background: #76af4a;
        color: #fff;
        padding: 15px 20px;
    }

    .btn:hover {
        color: #76af4a;
    }

    .btn:active,
    .btn:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        background: white;
        border: #76af4a solid 1px;
        color: #76af4a;
    }

    /* .contact-wrap {
        -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
    } */

    .contact-wrap .col-form-label {
        font-size: 14px;
        color: #b3b3b3;
        margin: 0 0 10px 0;
        display: inline-block;
        padding: 0;
    }

    .contact-wrap .form,
    .contact-wrap .contact-info {
        padding: 40px;
    }

    .contact-wrap .contact-info {
        color: rgba(255, 255, 255, 0.9);
    }

    .contact-wrap .contact-info ul li {
        margin-bottom: 15px;
        color: rgba(255, 255, 255, 0.9);
    }

    .contact-wrap .contact-info ul li .wrap-icon {
        font-size: 20px;
        color: #fff;
        margin-top: 5px;
    }

    .contact-wrap .form {
        background: #fff;
    }

    .contact-wrap .form h3 {
        color: #35477d;
        font-size: 20px;
        margin-bottom: 30px;
    }

    .contact-wrap .contact-info {
        /* background: #76af4a; */
        background: rgba(118,175,74,0.9);
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }

    .contact-wrap .contact-info h3 {
        color: #fff;
        font-size: 20px;
        margin-bottom: 30px;
    }

    label.error {
        font-size: 12px;
        color: red;
    }

    #message {
        resize: vertical;
    }

    #form-message-warning,
    #form-message-success {
        display: none;
    }

    #form-message-warning {
        color: #B90B0B;
    }

    #form-message-success {
        color: #55A44E;
        font-size: 18px;
        font-weight: bold;
    }

    .submitting {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-weight: bold;
        font-size: 12px;
        color: #000;
    }

    input::placeholder {
        color: #76af4a;
    }
</style>


<div class="content mb-5" ></br>

    <div class="container " >
     
        <div class="row align-items-stretch no-gutters contact-wrap py-1">

            <div class="col-md-8">
                <div class="form h-100">
                    <h3 class="text-main">Send us a message</h3>
                    <form class="mb-2" method="post" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-6 form-group mb-2">
                                <label for="" class="col-form-label">Name *</label>
                                <input type="text" required="required" class="form-control" name="name" id="name" placeholder="Your name">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="" class="col-form-label">Email *</label>
                                <input type="text" required="required" class="form-control" name="email" id="email" placeholder="Your email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mb-2">
                                <label for="" class="col-form-label">Phone *</label>
                                <input type="text" class="form-control" required="required" name="phone" id="phone" placeholder="Phone #">
                            </div>
                            <div class="col-md-6 form-group mb-5" hidden>
                                <label for="" class="col-form-label">Company</label>
                                <input type="text" class="form-control" name="company" id="company" placeholder="Company  name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mb-2">
                                <label for="message" class="col-form-label">Message *</label>
                                <textarea class="form-control" required="required" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" value="Send Message" class="btn bg-main text-light rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your message was sent, thank you!
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info h-100">
                    <h3>Contact Us</h3>
                    <p class="mb-5">We’re here to help and answer any question you might have. We look forward to hearing from you</br>
					Thank You</p>
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="wrap-icon icon-room fa fa-map-marker mr-3"></span>
                            <span class="text">Market Plaza, Kisii. KENYA</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-phone fa fa-phone mr-3"></span>
                            <span class="text">+(254) 723 291 135 | 020 135 291</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-envelope fa fa-envelope mr-3"></span>
                            <span class="text">info@bonganet.co.ke</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-envelope fa fa-globe mr-3"></span>
                            <span class="text">www.bonganet.co.ke</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>