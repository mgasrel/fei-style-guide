<section>
    <h1 id="forms" class="page-header">Forms</h1>

    <article>
        <h2 id="forms-overview">Overview</h2>

        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-form-controls">Form controls</h2>

        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
            </div>
        </div>

        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </form>
            </div>
        </div>

        <h3>Sizing</h3>
        <div class="sample">
            <div class="sample-html sample-forms-control-sizing">
    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
    <input class="form-control" type="text" placeholder="Default input">
    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">            
            </div>
        </div>

        <h3>Readonly</h3>
        <div class="sample">
            <div class="sample-html">
    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>            
            </div>
        </div>

        <h3>Readonly plain text</h3>
        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
    </form>
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-checkboxes-and-radios">Checkboxes and radios</h2>

        <div class="sample">
            <div class="sample-html">
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            Option one is this and that&mdash;be sure to include why it's great
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" disabled>
            Option two is disabled
        </label>
    </div>
            </div>
        </div>

        <div class="sample">
            <div class="sample-html">
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
            Option three is disabled
        </label>
    </div>
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-layout">Layout</h2>

        <h3>Complex</h3>
        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
            </div>
        </div>

        <h3>Horizontal form</h3>
        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-legend col-sm-2">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            Option three is disabled
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Check me out
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>                
            </div>
        </div>            
    </article>

    <article>
        <h2 id="forms-help-text">Help text</h2>

        <div class="sample">
            <div class="sample-html">
    <label for="inputPassword5">Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
    <small id="passwordHelpBlock" class="form-text text-muted">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </small>                
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-disabled-forms">Disabled forms</h2>

        <div class="sample">
            <div class="sample-html">
    <form>
        <fieldset disabled>
            <div class="form-group">
                <label for="disabledTextInput">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="form-group">
                <label for="disabledSelect">Disabled select menu</label>
                <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                </select>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Can't check this
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-validation">Validation</h2>

        <h3>Custom styles</h3>
        <div class="sample">
            <div class="sample-html">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
            </div>
        </div>

        <h3>Supported elements</h3>
        <div class="sample">
            <div class="sample-html">
    <form class="was-validated">
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" required>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Check this custom checkbox</span>
        </label>

        <div class="custom-controls-stacked d-block my-3">
            <label class="custom-control custom-radio">
                <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Toggle this custom radio</span>
            </label>
            <label class="custom-control custom-radio">
                <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Or toggle this other custom radio</span>
            </label>
        </div>

        <select class="custom-select d-block my-3" required>
            <option value="">Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" required>
            <span class="custom-file-control"></span>
        </label>
    </form>                
            </div>
        </div>
    </article>

    <article>
        <h2 id="forms-custom-forms">Custom forms</h2>

        <h3>Checkboxes</h3>
        <div class="sample">
            <div class="sample-html">
    <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" selected>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Check this custom checkbox</span>
    </label>                
            </div>
        </div>

        <h3>Radios</h3>
        <div class="sample">
            <div class="sample-html">
    <label class="custom-control custom-radio">
        <input id="radio1" name="radio" type="radio" class="custom-control-input" selected>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Toggle this custom radio</span>
    </label>
    <label class="custom-control custom-radio">
        <input id="radio2" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Or toggle this other custom radio</span>
    </label>
            </div>
        </div>

        <h3>Disabled</h3>
        <div class="sample">
            <div class="sample-html">
    <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" disabled>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Check this custom checkbox</span>
    </label>
    <label class="custom-control custom-radio">
        <input id="radio3" name="radioDisabled" type="radio" class="custom-control-input" disabled>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Toggle this custom radio</span>
    </label>
            </div>
        </div>

        <h3>Select menu</h3>
        <div class="sample">
            <div class="sample-html">
    <select class="custom-select">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
            </div>
        </div>

        <h3>File browser</h3>
        <div class="sample">
            <div class="sample-html">
    <label class="custom-file">
        <input type="file" id="file2" class="custom-file-input">
        <span class="custom-file-control"></span>
    </label>
            </div>
        </div>
    </article>
</section>