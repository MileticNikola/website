<?php
$pageData['title'] = "Team Spectralis | Contact Us";
$pageData['meta']['description'] = "Want to ask/tell us anything or want to work with us? Contact us here.";
$pageData['meta']['keywords'] = "contact, ask, send, tell, write";
$pageData['og']['title'] = "Team Spectralis | Contact Us";
$pageData['og']['description'] = "Want to ask/tell us anything or want to work with us? Contact us here.";
$pageData['og']['image'] = "https://teamspectralis.com/img/thumbnail.png";
?>
<div class="section" style="background:url('/img/cover/cover1.png')center;background-size:cover;">
    <div class="container">
        <h2>Get in touch</h2>
        <p>Want to work with us or have anything important to ask or suggest? Feel free to send us a message, we would love to hear from you.</p>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="https://formsubmit.co/info@teamspectralis.com" method="POST" class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="_replyto">
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Your Message" name="message" required></textarea>
                    </div>
                    <input type="hidden" name="_subject" value="Team Spectralis Website Submission Reply.">
                    <input type="hidden" name="_next" value="https://teamspectralis.com/success">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_captcha" value="true">
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <div class="col-md-6 mobile-padded">
                <h3>Other contact options</h3>
                <ul>
                    <li>Email: <a href="mailto:<?= MAIL ?>"><?= MAIL ?></a></li>
                    <li>Discord: <a href="<?= DISCORD ?>">Spectralis Discord</a></li>
                </ul>
                <h3>Follow us on social media</h3>
                <div class="social">
                    <a href="<?= FACEBOOK ?>"><i class="fab fa-facebook fa-lg icon-link"></i></a>
                    <a href="<?= INSTAGRAM ?>"><i class="fab fa-instagram fa-lg icon-link"></i></a>
                    <a href="<?= TWITTER ?>"><i class="fab fa-twitter fa-lg icon-link"></i></a>
                    <a href="<?= YOUTUBE ?>"><i class="fab fa-youtube fa-lg icon-link"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>