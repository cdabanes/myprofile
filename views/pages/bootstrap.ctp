<!-- Tables================================================== -->
<div class="page-header">
  <h1>Tables</h1>
</div>

<div class="row">
  <div class="span6">
    <h4>Bordered without thead</h4>
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
    <h4>Bordered without thead, with caption</h4>
    <table class="table table-bordered">
      <caption>Table caption</caption>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
    <h4>Bordered without thead, with colgroup</h4>
    <table class="table table-bordered">
      <colgroup>
        <col class="col1">
        <col class="col2">
        <col class="col3">
      </colgroup>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
    <h4>Bordered with thead, with colgroup</h4>
    <table class="table table-bordered">
      <colgroup>
        <col class="col1">
        <col class="col2">
        <col class="col3">
      </colgroup>
      <thead>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
  </div><!--/span-->
  <div class="span6">
    <h4>Bordered with thead and caption</h4>
    <table class="table table-bordered">
      <caption>Table caption</caption>
      <thead>
        <tr>
          <th>1</th>
          <th>2</th>
          <th>3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
    <h4>Bordered with rowspan and colspan</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>1</th>
          <th>2</th>
          <th>3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">1 and 2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td rowspan="2">2</td>
          <td>3</td>
        </tr>
        <tr>
          <td rowspan="2">1</td>
          <td>3</td>
        </tr>
        <tr>
          <td colspan="2">2 and 3</td>
        </tr>
      </tbody>
    </table>
  </div><!--/span-->
</div><!--/row-->



<!-- Forms
================================================== -->

<div class="page-header">
  <h1>Forms</h1>
</div>

<div class="row">
  <div class="span4">
    <h4>Prepend and append on inputs</h4>
    <form>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">@</span><input class="span2" id="prependedInput" size="16" type="text">
        </div>
      </div>
      <div class="controls">
        <div class="input-append">
          <input class="span2" id="prependedInput" size="16" type="text"><span class="add-on">@</span>
        </div>
      </div>
      <div class="controls">
        <div class="input-prepend input-append">
          <span class="add-on">$</span><input class="span2" id="prependedInput" size="16" type="text"><span class="add-on">.00</span>
        </div>
      </div>
    </form>
  </div><!--/span-->
  <div class="span6">
    <h4>Prepend and append with uneditable</h4>
    <form>
      <div class="input-prepend">
        <span class="add-on">$</span><span class="span2 uneditable-input">Some value here</span>
      </div>
      <div class="input-append">
        <span class="span2 uneditable-input">Some value here</span><span class="add-on">.00</span>
      </div>
    </form>
  </div><!--/span-->
</div><!--/row-->

<h4>Fluid prepended and appended inputs</h4>
<div class="row-fluid">
  <div class="span6">
    <form>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">@</span><input class="span2" id="prependedInput" size="16" type="text">
        </div>
      </div>
      <div class="controls">
        <div class="input-append">
          <input class="span2" id="prependedInput" size="16" type="text"><span class="add-on">@</span>
        </div>
      </div>
      <div class="controls">
        <div class="input-prepend input-append">
          <span class="add-on">$</span><input class="span2" id="prependedInput" size="16" type="text"><span class="add-on">.00</span>
        </div>
      </div>
    </form>
  </div>
</div>

<h4>Fixed row with inputs</h4>
<p>Inputs should not extend past the light red background, set on their parent, a <code>.span*</code> column.</p>

<div class="rowInputs">
  <div class="row">
    <div class="span12">
      <input type="text" class="span1" placeholder="span1">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span2" placeholder="span2">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span3" placeholder="span3">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span4" placeholder="span4">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span5" placeholder="span5">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span6" placeholder="span6">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span7" placeholder="span7">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span8" placeholder="span8">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span9" placeholder="span9">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span10" placeholder="span10">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span11" placeholder="span11">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row">
    <div class="span12">
      <input type="text" class="span12" placeholder="span12">
    </div><!--/span-->
  </div><!--/row-->
</div>
<br>

<h4>Fluid row with inputs</h4>
<p>Inputs should not extend past the light red background, set on their parent, a <code>.span*</code> column.</p>
<div id="fluidRowInputs">
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span1" placeholder="span1">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span2" placeholder="span2">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span3" placeholder="span3">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span4" placeholder="span4">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span5" placeholder="span5">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span6" placeholder="span6">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span7" placeholder="span7">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span8" placeholder="span8">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span9" placeholder="span9">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span10" placeholder="span10">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span11" placeholder="span11">
    </div><!--/span-->
  </div><!--/row-->
  <div class="row-fluid">
    <div class="span12">
      <input type="text" class="span12" placeholder="span12">
    </div><!--/span-->
  </div><!--/row-->
</div>
<br>


<!-- Dropdowns
================================================== -->

<div class="page-header">
  <h1>Dropdowns</h1>
</div>

<h4>Dropdown link with hash URL</h4>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Link</a></li>
  <li><a href="#">Example link</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </li>
</ul>

<h4>Dropdown link with custom URL and data-target</h4>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Link</a></li>
  <li><a href="#">Example link</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="path/to/page.html">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </li>
</ul>

<h4>Dropdown on a button</h4>
<div style="position: relative;">
  <button class="btn" type="button" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<br>


<!-- Thumbnails
================================================== -->

<div class="page-header">
  <h1>Thumbnails</h1>
</div>

<h4>Default thumbnails (no grid sizing)</h4>
<ul class="thumbnails">
  <li class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
  </li>
  <li class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
  </li>
  <li class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
  </li>
  <li class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
  </li>
</ul>

<!-- NOT CURRENTLY SUPPORTED
<h4>Offset thumbnails</h4>
<ul class="thumbnails">
  <li class="span3 offset3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
  <li class="span3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
  <li class="span3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
</ul>
-->

<h4>Standard grid sizing</h4>
<ul class="thumbnails">
  <li class="span3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
  <li class="span3 offset3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
  <li class="span3">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/260x180" alt="">
    </a>
  </li>
</ul>

<h4>Fluid thumbnails</h4>
<div class="row-fluid">
  <div class="span8">
    <ul class="thumbnails">
      <li class="span4">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/260x180" alt="">
        </a>
      </li>
      <li class="span4">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/260x180" alt="">
        </a>
      </li>
      <li class="span4">
        <a href="#" class="thumbnail">
          <img src="http://placehold.it/260x180" alt="">
        </a>
      </li>
    </ul>
  </div>
</div>



<!-- Tabs
================================================== -->

<div class="page-header">
  <h1>Tabs</h1>
</div>

<div class="tabbable tabs-left" style="margin-bottom: 18px;">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
    <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
  </ul>
  <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
    <div class="tab-pane active" id="tab1">
      <p>I'm in Section 1.</p>

      <div class="tabbable" style="background: #f5f5f5; padding: 20px;">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1-1" data-toggle="tab">1.1</a></li>
          <li><a href="#tab1-2" data-toggle="tab">1.2</a></li>
          <li><a href="#tab1-3" data-toggle="tab">1.3</a></li>
        </ul>
        <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
          <div class="tab-pane active" id="tab1-1">
            <p>I'm in Section 1.1.</p>
          </div>
          <div class="tab-pane" id="tab1-2">
            <p>I'm in Section 1.2.</p>
          </div>
          <div class="tab-pane" id="tab1-3">
            <p>I'm in Section 1.3.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="tab2">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane" id="tab3">
      <p>What up girl, this is Section 3.</p>
    </div>
  </div>
</div> <!-- /tabbable -->



<!-- Labels
================================================== -->

<div class="page-header">
  <h1>Labels</h1>
</div>

<div class="row">
  <div class="span4">
    <h4>Inline label</h4>
    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam <span class="label label-warning">Label name</span> eget risus varius blandit sit amet non magna. Fusce <code>.class-name</code> dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  </div><!--/span-->
  <div class="span4">
    <form class="form-horizontal">
      <label>Example label</label>
      <input type="text" placeholder="Input"> <span class="help-inline"><span class="label">Hey!</span> Read this.</span>
    </form>
  </div><!--/span-->
  <div class="span4">

  </div><!--/span-->
</div><!--/row-->









