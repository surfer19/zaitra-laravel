<footer id="contact">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-2 col-md-offset-4">
        <h4><strong>Contact us</strong></h4>
        <ul class="list-unstyled">
          <li><i class="fas fa-phone fa-fw"></i> {{ site.telephone }}</li>
          <li><i class="far fa-envelope fa-fw"></i>  <a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
          <li><i class="fas fa-briefcase fa-fw"></i>  {{ site.id_number }}</li>
        </ul>
      </div>
      <div class="col-md-2">
        <h4><strong>{{ site.owner }}</strong></h4>
        <p>
          {% for address in site.address %}
          {{ address.line }}<br>
          {% endfor %}
        </p>
      </div>
    </div>
    <div class="row text-center social">
      <div class="col-12">
          <ul class="list-inline">
              <li>
                <a href="https://www.linkedin.com/company/28969889" target="_blank"><i class="fab fa-linkedin fa-fw fa-3x social-i"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/zaitra.io/" target="_blank"><i class="fab fa-instagram fa-fw fa-3x social-i"></i></a>
              </li>
              <li>
                <a href="https://github.com/zaitra" target="_blank"><i class="fab fa-github fa-fw fa-3x social-i"></i></a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; {{ site.copyright }} 20{{ site.time | date: '%y' }}</p>
      </div>
    </div>
      
    </div>
  </div>
</footer>
