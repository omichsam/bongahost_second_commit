<style>
    /* body{
    margin-top:20px;
    background:#eee;
} */
    .card::after {
        display: block;
        position: absolute;
        bottom: -10px;
        left: 20px;
        width: calc(100% - 40px);
        height: 35px;
        background-color: #fff;
        /* -webkit-box-shadow: 0 19px 28px 5px rgba(64, 64, 64, 0.09);
        box-shadow: 0 19px 28px 5px rgba(64, 64, 64, 0.09); */
        content: '';
        z-index: -1;
    }

    a.card {
        text-decoration: none;
    }

    .card {
        position: relative;
        border: 0;
        border-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09);
        box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09);
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        /* border: 1px solid rgba(0, 0, 0, 0.125); */
        /* border-radius: .25rem; */
        border-radius: 25px;
    }


    .box-shadow {
        -webkit-box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09) !important;
        box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09) !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .d-block {
        display: block !important;
    }

    img,
    figure {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
    }

    .card-text {
        padding-top: 16px;
        color: #8c8c8c;
    }

    .text-sm {
        font-size: 16px !important;
    }

    /* p, .p {
    margin: 0 0 16px;
} */

    .card-title {
        margin: 0;
        /* font-family: "Montserrat", sans-serif; */
        font-size: 18px;
        font-weight: 900;
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem !important;
    }

    .head-icon {
        margin-top: 18px;
        /* color:#FF4500 */
        color: green;
    }
</style>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section class="container pt-3 mb-3">
    <h2 class="h3 block-title text-center text-main">Our services<br></h2>
    <h3 class="text-center mb-5 mt-3"><small class="pt-3 alert text-dark ">Whatever we do, we do with your end user in mind </small></h6>
        <div class="row pt-5 mt-30">
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center text-main" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user fa-3x text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Internet Service Provision(ISP)</h3>
                        <p class="card-text text-sm"> We deliver a high-quality
                            internet network with high speeds both upload and download speeds,
                            with outstanding reliability 99.99% uptime with 24/7 technical and remote support.


                        </p>
                        <span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user-circle-o fa-3x head-ico text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Website Development</h3>
                        <p class="card-text text-sm">We have learned a lot by observing the trends in web design. Generally,we
                            develop websites at an affordable cost & standard quality.
                            We deliver great websites in the most efficient way possible & with the latest technology.</p>
                        <span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-ico text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">System Development</h3>
                        <p class="card-text text-sm">Bonganet Solutions aims to produce high quality systems that meet or exceed customer expectations,
                            based on customer requirements, by delivering systems which move through each clearly defined phase, within scheduled time-frames
                            and cost estimates.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-ico text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Network Management</h3>
                        <p class="card-text text-sm">Bonganet solutions will work with you to determine whether optimizing your existing network or investing
                            in a new network is best for your organization. We provide solution to meet your organisations needs
                        </p><span class="text-sm text-uppercase font-weight-bold">read more&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-ico text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Surveillance Security Systems</h3>
                        <p class="card-text text-sm">We offer a wide range of security systems including; Integrated Intrusion Alarm with CCTV System Automatic Gates Installation Electric Fences Installation.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-ico text-main"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Cloud services</h3>
                        <p class="card-text text-sm">
                            Rather than owning your own computing infrastructure or data center, Bonganet solutions can lease access to anything from applications to storage from our cloud services.
                        </p>
                        <span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
</section>