<section id="stat-cards-example">
    <h1 id="stat-cards" class="page-header">Stat cards</h1>

    <article>
        <h2 id="stat-cards-default">Default</h2>

        <div class="row">
            <div class="col-sm-3">
                <div class="statcard">
                    <h3 class="statcard-number">12,938</h3>
                    <span class="statcard-desc">Page views</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="statcard">
                    <h3 class="statcard-number">758</h3>
                    <span class="statcard-desc">Downloads</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="statcard">
                    <h3 class="statcard-number">1,293</h3>
                    <span class="statcard-desc">Sign-ups</span>
                </div>
            </div>
        </div>

        <pre class="sample-code">
            <code data-language="html">
    <div class="statcard">
        <h3 class="statcard-number">12,938</h3>
        <span class="statcard-desc">Page views</span>
    </div>
    <div class="statcard">
        <h3 class="statcard-number">758</h3>
        <span class="statcard-desc">Downloads</span>
    </div>
    <div class="statcard">
        <h3 class="statcard-number">1,293</h3>
        <span class="statcard-desc">Sign-ups</span>
    </div></code>
        </pre>
    </article>

    <article>
        <h2 id="stat-cards-with-caret">With caret</h2>

        <div class="row">
            <div class="col-sm-3">
                <div class="statcard">
                    <h3 class="statcard-number">
                        12,938
                        <small class="delta-indicator delta-positive">5%</small>
                    </h3>
                    <span class="statcard-desc">Page views</span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="statcard">
                    <h3 class="statcard-number">
                        758
                        <small class="delta-indicator delta-negative">1.3%</small>
                    </h3>
                    <span class="statcard-desc">Downloads</span>
                </div>
            </div>
        </div>

        <pre class="sample-code">
            <code data-language="html">
    <div class="statcard">
        <h3 class="statcard-number">12,938<small class="delta-indicator delta-positive">5%</small></h3>
        <span class="statcard-desc">Page views</span>
    </div>
    <div class="statcard">
        <h3 class="statcard-number">758<small class="delta-indicator delta-negative">1.3%</small></h3>
        <span class="statcard-desc">Downloads</span>
    </div></code>
        </pre>
    </article>

    <article>
        <h2 id="stat-cards-with-background">Background</h2>

        <div class="row">
            <div class="col-sm-2">
                <div class="statcard statcard-default padding-xs">
                    <h3 class="statcard-number">
                        365
                        <small class="delta-indicator delta-positive">5%</small>
                    </h3>
                    <span class="statcard-desc">Page views</span>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="statcard statcard-primary padding-xs">
                    <h3 class="statcard-number">
                        938
                        <small class="delta-indicator delta-positive">5%</small>
                    </h3>
                    <span class="statcard-desc">Page views</span>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="statcard statcard-success padding-xs">
                    <h3 class="statcard-number">
                        758
                        <small class="delta-indicator delta-negative">1.3%</small>
                    </h3>
                    <span class="statcard-desc">Downloads</span>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="statcard statcard-info padding-xs">
                    <h3 class="statcard-number">
                        206
                        <small class="delta-indicator delta-negative">1.3%</small>
                    </h3>
                    <span class="statcard-desc">Downloads</span>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="statcard statcard-danger padding-xs">
                    <h3 class="statcard-number">
                        715
                        <small class="delta-indicator delta-positive">6.75%</small>
                    </h3>
                    <span class="statcard-desc">Sign-ups</span>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="statcard statcard-warning padding-xs">
                    <h3 class="statcard-number">
                        107
                        <small class="delta-indicator delta-positive">6.75%</small>
                    </h3>
                    <span class="statcard-desc">Sign-ups</span>
                </div>
            </div>
        </div>

        <pre class="sample-code">
            <code data-language="html">
    <div class="statcard">
        <h3 class="statcard-number">12,938<small class="delta-indicator delta-positive">5%</small></h3>
        <span class="statcard-desc">Page views</span>
    </div>
    <div class="statcard">
        <h3 class="statcard-number">758<small class="delta-indicator delta-negative">1.3%</small></h3>
        <span class="statcard-desc">Downloads</span>
    </div></code>
        </pre>
    </article>
</section>