@extends('layout')

@section('main')
<section id="contact" class="contact-section section-padding" data-scroll-index="6">
    <div class="container">
        <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2>Get In Touch</h2>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="contact.php" method="post" id="ajax_form" class="row contact-form text-center">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="contact_name" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" class="form-control" name="contact_email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" name="contact_subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea class="form-control message" name="contact_message" id="message" name="message" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button id="submit" class="default-btn" name="contact_submit" type="submit">Send Message</button>
                    </div>
                    <div id="form-messages" class="form-group col-lg-12">
                        <div class="alert" role="alert"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
