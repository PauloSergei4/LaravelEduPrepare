@extends('admin.layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Form Validation</h1>
                    <span>Provide valuable, actionable feedback to your users with HTML5 form validation, via browser default behaviors or custom styles and JavaScript.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Example</h5>
                    </div>
                    <div class="card-body">
                        <div class="example-container">
                            <div class="example-content">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustomUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label">State</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                            <div class="example-code">
                                                <pre><code class="html">&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustom01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot; value=&quot;Mark&quot; required&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustom02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot; value=&quot;Otto&quot; required&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4&quot;&gt;
        &lt;label for=&quot;validationCustomUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group has-validation&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustomUsername&quot; aria-describedby=&quot;inputGroupPrepend&quot; required&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                Please choose a username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;label for=&quot;validationCustom03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; required&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationCustom04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
        &lt;select class=&quot;form-select&quot; id=&quot;validationCustom04&quot; required&gt;
            &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3&quot;&gt;
        &lt;label for=&quot;validationCustom05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; required&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck&quot; required&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;&gt;
                Agree to terms and conditions
            &lt;/label&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                You must agree before submitting.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Tooltips</h5>
                    </div>
                    <div class="card-body">
                        <div class="example-container">
                            <div class="example-content">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4 position-relative mb-5">
                                        <label for="validationTooltip01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 position-relative mb-5">
                                        <label for="validationTooltip02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 position-relative mb-5">
                                        <label for="validationTooltipUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                            <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 position-relative mb-5">
                                        <label for="validationTooltip03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationTooltip03" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3 position-relative mb-5">
                                        <label for="validationTooltip04" class="form-label">State</label>
                                        <select class="form-select" id="validationTooltip04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 position-relative mb-5">
                                        <label for="validationTooltip05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationTooltip05" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                            <div class="example-code">
                                                <pre><code class="html">&lt;form class=&quot;row g-3 needs-validation&quot; novalidate&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltip01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; value=&quot;Mark&quot; required&gt;
        &lt;div class=&quot;valid-tooltip&quot;&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltip02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; value=&quot;Otto&quot; required&gt;
        &lt;div class=&quot;valid-tooltip&quot;&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltipUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
        &lt;div class=&quot;input-group has-validation&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipUsername&quot; aria-describedby=&quot;validationTooltipUsernamePrepend&quot; required&gt;
            &lt;div class=&quot;invalid-tooltip&quot;&gt;
                Please choose a unique and valid username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltip03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; required&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltip04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
        &lt;select class=&quot;form-select&quot; id=&quot;validationTooltip04&quot; required&gt;
            &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative mb-5&quot;&gt;
        &lt;label for=&quot;validationTooltip05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; required&gt;
        &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
