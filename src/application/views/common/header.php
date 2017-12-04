<nav id="navbar-main" class="navbar navbar-expand-sm navbar-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="/">Thermofisher - Style Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item<?php if($url_segments[0] == 'content') {echo ' active';} ?>"><a class="nav-link" href="/content">Content</a></li>
                <li class="nav-item<?php if($url_segments[0] == 'components') {echo ' active';} ?>"><a class="nav-link" href="/components">Components</a></li>
                <!--<li class="nav-item<?php if($url_segments[0] == 'more') {echo ' active';} ?>"><a class="nav-link" href="/more">More</a></li>-->
                <!--li<?php if($url_segments[0] == 'variables') {echo ' class="active"';} ?>><a href="/variables">Variables</a></li-->
                <!--li<?php if($url_segments[0] == 'demo') {echo ' class="active"';} ?>><a href="/demo">Demo</a></li-->
            </ul>
        </div>
    </div>
</nav>