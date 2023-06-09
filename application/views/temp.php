<div class="px-content">
    <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-checkbox-outline"></i>Forms / </span>Layout</h1>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Group</div>
        </div>
        <form class="panel-body">
            <fieldset class="form-group">
                <label for="form-group-input-1">Example label</label>
                <input type="text" class="form-control" id="form-group-input-1" placeholder="Example input">
                <small class="text-muted">We'll never share your email with anyone else.</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="form-group-input-2">Another label</label>
                <input type="text" class="form-control" id="form-group-input-2" placeholder="Another input">
            </fieldset>
        </form>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Inline</div>
        </div>
        <div class="panel-body">
            <form class="form-inline">
                <div class="form-group">
                    <label for="form-inline-input-1">Name</label>
                    <input type="text" class="form-control" id="form-inline-input-1" placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label for="form-inline-input-2">Email</label>
                    <input type="email" class="form-control" id="form-inline-input-2" placeholder="jane.doe@example.com">
                </div>
                <button type="submit" class="btn btn-primary">Send invitation</button>
            </form>

            <hr class="page-wide-block">

            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="form-inline-input-5">Email address</label>
                    <input type="email" class="form-control" id="form-inline-input-5" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-inline-input-6">Password</label>
                    <input type="password" class="form-control" id="form-inline-input-6" placeholder="Password">
                </div>
                <label class="custom-control custom-checkbox" for="form-inline-input-7">
                    <input type="checkbox" id="form-inline-input-7" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    Remember me
                </label>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            <hr class="page-wide-block">

            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="form-inline-input-8">Amount (in dollars)</label>
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" class="form-control" id="form-inline-input-8" placeholder="Amount">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Transfer cash</button>
            </form>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Horizontal</div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <p class="form-control-static">example@mail.com</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="grid-input-1" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" id="grid-input-1" placeholder="Password">
                        <small class="text-muted">Please do not use too weak password.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="grid-input-2" class="col-md-3 control-label">Gender</label>
                    <div class="col-md-9">
                        <select class="form-control" id="grid-input-2">
                            <option>Not selected</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="grid-input-5" class="col-md-3 control-label">Gender</label>
                    <div class="col-md-9">
                        <select class="custom-select form-control" id="grid-input-5">
                            <option>Not selected</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="grid-input-3" class="col-md-3 control-label">Photo</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control-file" id="grid-input-3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="grid-input-6" class="col-md-3 control-label">Photo</label>
                    <div class="col-md-9">
                        <label id="grid-input-6-file" class="custom-file px-file" for="grid-input-6">
                            <input type="file" id="grid-input-6" class="custom-file-input">
                            <span class="custom-file-control form-control">Choose file...</span>
                            <div class="px-file-buttons">
                                <button type="button" class="btn btn-xs px-file-clear">Clear</button>
                                <button type="button" class="btn btn-primary btn-xs px-file-browse">Browse</button>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Switcher</label>
                    <div class="col-md-9">
                        <label for="switcher-basic" class="switcher switcher-success">
                            <input type="checkbox" id="switcher-basic" checked>
                            <div class="switcher-indicator">
                                <div class="switcher-yes">YES</div>
                                <div class="switcher-no">NO</div>
                            </div>
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Radios</label>
                    <div class="col-md-9">
                        <div class="radio">
                            <label>
                                <input type="radio" name="grid-radios-1" value="option1" checked>
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="grid-radios-1" value="option2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="radio disabled">
                            <label>
                                <input type="radio" name="grid-radios-1" value="option3" disabled>
                                Option three is disabled
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Radios</label>
                    <div class="col-md-9">
                        <label class="custom-control custom-radio" for="grid-input-7">
                            <input type="radio" id="grid-input-7" name="grid-radios-2" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                            Option one is this and that—be sure to include why it's great
                        </label>
                        <label class="custom-control custom-radio" for="grid-input-8">
                            <input type="radio" id="grid-input-8" name="grid-radios-2" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            Option two can be something else and selecting it will deselect option one
                        </label>
                        <label class="custom-control custom-radio" for="grid-input-9">
                            <input type="radio" id="grid-input-9" name="grid-radios-2" class="custom-control-input" disabled>
                            <span class="custom-control-indicator"></span>
                            Option three is disabled
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Checkbox</label>
                    <div class="col-md-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Checkbox</label>
                    <div class="col-md-9">
                        <label class="custom-control custom-checkbox" for="grid-input-10">
                            <input type="checkbox" id="grid-input-10" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">Grid</div>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="grid-input-16">First name</label>
                                <input type="text" id="grid-input-16" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="grid-input-17">Last name</label>
                                <input type="text" id="grid-input-17" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="grid-input-18">E-mail</label>
                                <input type="text" id="grid-input-18" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="grid-input-19">Website</label>
                                <input type="text" id="grid-input-19" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="grid-input-20">Message</label>
                                <textarea id="grid-input-20" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">Without labels</div>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="sr-only" for="grid-input-11">First name</label>
                                <input type="text" placeholder="First name" id="grid-input-11" class="form-control">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="sr-only" for="grid-input-12">Last name</label>
                                <input type="text" placeholder="Last name" id="grid-input-12" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="sr-only" for="grid-input-13">E-mail</label>
                                <input type="text" placeholder="E-mail" id="grid-input-13" class="form-control">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="sr-only" for="grid-input-14">Website</label>
                                <input type="text" placeholder="Website" id="grid-input-14" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="sr-only" for="grid-input-15">Message</label>
                                <textarea placeholder="Message" id="grid-input-15" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Bordered</span>
                </div>
                <form action="" class="panel-body form-horizontal form-bordered p-y-0">
                    <div class="form-group panel-block">
                        <div class="row">
                            <label class="col-sm-4 control-label">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group panel-block">
                        <div class="row">
                            <label class="col-sm-4 control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="panel-footer text-right">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>