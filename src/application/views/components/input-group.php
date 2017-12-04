<section>
    <h1 id="input-group" class="page-header">Input group</h1>

    <article>
        <h2 id="input-group-basic-example">Basic example</h2>
        <div class="sample">
            <div class="sample-html">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-addon" id="basic-addon2">@example.com</span>
    </div>
    <br>
    <label for="basic-url">Your vanity URL</label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-addon">.00</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <span class="input-group-addon">0.00</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    </div>
            </div>
        </div>
    </article>
    
    <article>
        <h2 id="input-group-sizing">Sizing</h2>
        <div class="sample">
            <div class="sample-html sample-input-group-sizing">  
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <input type="text" class="form-control" placeholder=".input-group-lg" aria-label=".input-group-lg" aria-describedby="sizing-addon1">
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="sizing-addon2">@</span>
        <input type="text" class="form-control" placeholder="Default input group" aria-label="Default input group" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">@</span>
        <input type="text" class="form-control" placeholder=".input-group-sm" aria-label=".input-group-sm" aria-describedby="sizing-addon3">
    </div>            
            </div>
        </div>
    </article>
    
    <article>
        <h2 id="input-group-checkboxes-and-radio-addons">Checkboxes and radio addons</h2>
        <div class="sample">
            <div class="sample-html">  
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                </span>
                <input type="text" class="form-control" aria-label="Text input with checkbox">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">
                    <input type="radio" aria-label="Radio button for following text input">
                </span>
                <input type="text" class="form-control" aria-label="Text input with radio button">
            </div>
        </div>
    </div>
            </div>
        </div>
    </article>
    
    <article>
        <h2 id="input-group-multiple-addons">Multiple addons</h2>
        <div class="sample">
            <div class="sample-html">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                </span>
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" aria-label="Text input with checkbox">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <span class="input-group-addon">0.00</span>
                <input type="text" class="form-control" aria-label="Text input with radio button">
            </div>
        </div>
    </div>
            </div>
        </div>
    </article>

    <article>
        <h2 id="input-group-button-addons">Buttons addons</h2>
        <div class="sample">
            <div class="sample-html">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Hate it</button>
                </span>
                <input type="text" class="form-control" placeholder="Product name" aria-label="Product name">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Love it</button>
                </span>
            </div>
        </div>
    </div>                
            </div>
        </div>
    </article>

    <article>
        <h2 id="input-group-button-with-dropdowns">Buttons with dropdowns</h2>
        <div class="sample">
            <div class="sample-html">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>                
            </div>
        </div>
    </article>    

    <article>
        <h2 id="input-group-segmented-buttons">Segmented buttons</h2>
        <div class="sample">
            <div class="sample-html">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary">Action</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary">Action</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>                
            </div>
        </div>
    </article>    

</section>