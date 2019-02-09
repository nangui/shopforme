<div class="d-none d-sm-block col-sm-6 shadow-sm" style="background: #044bae; height: 100%;">
    <div
        class="d-flex flex-column justify-content-center align-items-center text-white"
        style="width: 100%; height: 100%;">
        <h1>Get Started</h1>
        <div class="p-5">
            <a href="{{ url('/auth/github') }}" class="btn btn-block btn-white">
                <i class="fa fa-github" aria-hidden="true"></i>
                Sign in with Google+
            </a>
            <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-white">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                Sign in with Twitter
            </a>
            <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-white">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                Sign in with Facebook
            </a>
        </div>
    </div>
</div>
