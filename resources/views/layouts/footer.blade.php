@include('partials.delete_modal')
<footer class="footer" id="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span>Copyright © <a href="{{ route('index') }}">{{ $site_title or '' }}</a></span> |
                    <span>备案号</span> |
                    <span><a href="{{env('GITHUB_FOOTER')}}"><i class="fa fa-github fa-fw"></i></a> </span>
                </div>
            </div>
        </div>
    </div>
</footer>