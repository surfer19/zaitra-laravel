<section id="contact" class="section-white">
  <div class="container">
	<div class="row text-center">
		<h2 class="header">CONTACT US</h2>
	</div>
	<div class="row">
		<div class="col-md-6">
            <form id="contactForm" class="zaitra-form" action="{{ route('contact') }}" method="POST">
                @csrf
				<div class="form-group">
					<label for="name">Full name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Your email">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="message" placeholder="Type message" rows="5"></textarea>
				</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<button type="submit" class="btn btn-default">Submit message</button>
			</form>
		</div>
		<div class="col-md-6 text-center align-self-center">
			<div>
                <h4><strong>Zaitra s.r.o.</strong></h4>
                <p>
                    <i class="fas fa-phone fa-fw"></i> +421 944 244 120
                    <br/>
                    <i class="far fa-envelope fa-fw"></i>
                    <a href="mailto:info@zaitra.io">info@zaitra.io</a>
                    <br/>
                    <i class="fas fa-briefcase fa-fw"></i> IČ: 08908508
                </p>
			</div>
			<div>
				<p>
                    Technická 2935/23
                    <br>
                    616 00, Brno
                    <br>
                    Czech Republic
				</p>
			</div>
			<div class="row text-center social">
				<div class="col-12">
					<ul class="list-inline">
						<li class="list-inline-item">
						    <a href="https://www.linkedin.com/company/28969889" target="_blank"><i class="fab fa-linkedin fa-fw fa-3x social-i"></i></a>
						</li>
						<li class="list-inline-item">
    						<a href="https://www.instagram.com/zaitra.io/" target="_blank"><i class="fab fa-instagram fa-fw fa-3x social-i"></i></a>
						</li>
						<li class="list-inline-item">
						    <a href="https://github.com/zaitra" target="_blank"><i class="fab fa-github fa-fw fa-3x social-i"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
