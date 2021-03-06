<footer id="site-footer" class="site-footer">
  <div class="footer-bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-6">
                  {{-- <h3 class="company-title">{{ $content->name }}</h3> --}}
                  <h4>{{ $content->name }}</h4>
                  <div class="about-text">{!! Str::words($content->about, 25, '') !!}</div>
              </div>
              <div class="col-md-3 col-6">
                  <h4>Company Address</h4>
                  <ul class="address">
                      <li>{{ $content->address }}</li>
                      <li><b>Phone:</b> <a href="tel:{{ $content->phone }}">{{ $content->phone }}</a></li>
                      <li><b>Email:</b> <a href="mailto:{{ $content->email }}">{{ $content->email }}</a></li>
                      <li></li>
                  </ul>
              </div>
              <div class="col-md-3 col-6">
                  <h4>Follow Us</h4>
                  <ul class="link">
                      <li><a href="{{ $content->facebook }}" target="_blank"><i class="fab fa-facebook-square me-2"></i><span>Facebook</span></a></li>
                      <li><a href="{{ $content->twitter }}" target="_blank"><i class="fab fa-twitter-square me-2"></i><span>Twitter</span></a></li>
                      <li><a href="{{ $content->instagram }}" target="_blank"><i class="fab fa-instagram-square me-2"></i><span>Instagram</span></a></li>
                      <li><a href="{{ $content->linkedin }}" target="_blank"><i class="fab fa-linkedin me-2"></i><span>LinkedIn</span></a></li>
                  </ul>
              </div>
              <div class="col-md-3 col-6">
                  <h4 class="map-title">Location on Map</h4>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3383266745946!2d90.36699521429804!3d23.80656539254687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1655806317898!5m2!1sen!2sbd" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-end">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-12">
                  <div class="copyright">
                      <p>&copy; Copyright 2022, All right reserved.</p>
                  </div>
              </div>
              <div class="col-md-6 col-12">
                  <div class="developed">
                      <p>Designed & Developed By <a href="https://www.linktechbd.com" target="_blank">Link Up Technology Ltd.</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>