<?php $title="MaidSafe Common"; ?>
<?php $metakeywords="MaidSafe Common"; ?>
<?php $metadescription="A library of utility functions used by most of the MaidSafe Platform libraries."; ?>
<?php include('includes/header.php'); ?>
<body id="libraries">
<div id="container">
    <div id="main">
<?php include('includes/nav.php'); ?>
<div class="container-12">
    <div class="grid-9 main-content">
    <h1>MaidSafe-Common</h1>
<h2>Library of utility functions</h2>


<h3>Description</h3>
<p>Utilities used by most of the MaidSafe libraries.</p>
<h3>Features</h3>
<ul>
  <li>Cryptographic helpers for asymmetric, symmetric algorithms and key sizes</li>
  <li>Secure hashing helpers</li>
  <li>N+P key sharing scheme (Shamir)</li>
  <li>Exception safety helpers (see on_scope_exit.h)</li>
  <li>Active object helper</li>
  <li>ASIO helper (deadline timers and async service handling)</li>
  <li>LOG facility (lightweight Debug logging)</li>
  <li>Google Test runner helper (test.h)</li>
  <li>String manipulators (bounded stings, tagged values) to allow creation of concrete types<br>
    (we limit use of bare strings in favour of type safety)</li>
  <li>Safe queue (internally synchronised queue)</li>
  <li>Error handling system (MaidSafe and LifeStuff errors) with categories and codes per library</li>
</ul>
<h3>Programming languages</h3>
<h3>Core</h3>
<p>C++11 compatible with GCC (4.7 and above), Clang (3.3 and above) and  MSVC 2012 (with no dependency on CTP releases). Tested on Windows 32/64  bit, Linux 32/64 bit (dependent on GCC version) and OSX (Mountain Lion  and above).</p>
<h3>Status</h3>
<p>This library is considered <strong>BETA</strong> quality and  is provided with a test suite and QA suite. This can be considered for  use in production quality systems at this time.</p>

<h3>Roadmap</h3>
<ul>
  <li>Async improvements (task stealing systems)</li>
  <li>Introduce Co-Routines</li>
  <li>Investigate internal serialisation and parsing mechanisms</li>
</ul>
<h3>Links</h3>
<ul>
  <li><a href="https://github.com/maidsafe/MaidSafe-Common/wiki" target="_blank">Wiki, including build instructions</a></li>
  <li><a href="https://groups.google.com/forum/?fromgroups#%21forum/maidsafe-development" target="_blank">Developer mailing list</a></li>
  <li><a href="https://github.com/maidsafe/MaidSafe-Common/issues?state=open" target="_blank">Issue tracker</a></li>
  <li><a href="http://dash.maidsafe.net" target="_blank">Build Status</a></li>
</ul>
    </div>

<div class="grid-3 rightnav">
<div class="rightnav-box github">
<a href="https://github.com/maidsafe/MaidSafe-Common/wiki" target="_blank"><!-- content --><p>View on GitHub</p></a>
</div>
<div class="rightnav-box back">
<a href="maidsafe-network-platform-libraries"><p>Back to Libraries</p></a>
</div>
</div>
    
     
</div>

    </div>
    
</div>
  </div>  
</div>
<?php include('includes/footer.php'); ?>